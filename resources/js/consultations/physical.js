import {
    handleFormSubmit,
    httpRequest,
    removeClass,
    throttle,
} from "../utils/event-handler";
import {
    RequestCallBackForm,
    alertBox,
    confirmOTP,
    inputMobileForm,
    loader,
    patientsList,
    registrationForm,
} from "./helper";
let screenWidth = screen.width;
var appointmentParameter = {};
var UiParameters = {};
async function printSlots(request_date, department_id, doctor_id, location_id) {
    const slots = await httpRequest(
        "/api/appointment/check-availability",
        "POST",
        { request_date, department_id, doctor_id, location_id }
    );
    // document
    if (slots.data.status == true) {
        if (
            document
                .querySelector(".physical-consultation__slots-wrapper")
                .classList.contains("slick-initialized")
        ) {
            $(".physical-consultation__slots-wrapper").slick("unslick");
        }
        document.querySelector(
            ".physical-consultation__slots-wrapper"
        ).innerHTML = ` `;
        let slotCount = 0;
        slots.data.data.time_slot.forEach((slot) => {
            let current_date = new Date();
            let current_hrs = current_date.getHours();
            let current_minutes = current_date.getMinutes();

            let currentAmOrPm = current_hrs >= 12 ? "PM" : "AM";
            let currentTime = current_hrs + ":" + current_minutes;
            // console.log(slot.time);
            // console.log(current_date.toTimeString().slice(0,5));
            // console.log(currentTime);
            // console.log(slot.time < current_date.toTimeString().slice(0,5));
            // console.log(current_date.toISOString().slice(0, 10));
            // console.log(slots.data.data.request_date);
            // console.log(current_date.toISOString().slice(0, 10) === slots.data.data.request_date && slot.time < currentTime);
            if (slot.Reason == "Free" && slot.status == "1") {
                let hours = slot.time.split(":")[0];
                let minutes = slot.time.split(":")[1];
                let AmOrPm = hours >= 12 ? "PM" : "AM";
                hours = hours % 12 || 12;
                let slotCard = ``;
                if (
                    current_date.toISOString().slice(0, 10) ===
                        slots.data.data.request_date &&
                    slot.time < current_date.toTimeString().slice(0, 5)
                ) {
                    return;
                }
                slotCard = `<div class="physical-consultation__slots__main" >
                    <div class="physical-consultation__slots" data-type="${
                        slot.appointment_type
                    }" data-time="${slot.time}">
                    <span>${hours + ":" + minutes}</span>
                    <p>${AmOrPm}</p>
                    </div>
                </div>`;

                document
                    .querySelector(".physical-consultation__slots-wrapper")
                    .insertAdjacentHTML("beforeend", slotCard);
                slotCount++;
            }
        });
        

        if (slotCount == 0) {
            RequestCallBackForm(".physical-consultation__slots-wrapper",UiParameters);
        }
        domSelector(
            ".physical-consultation__slots",
            "click",
            throttle(handleSlotClick, 1500)
        );
        if (screenWidth < 669 && slotCount > 0) {
            $(".physical-consultation__slots-wrapper").slick({
                dots: false,
                arrows: true,
                // slidesToShow: 4,
                // slidesToScroll: 4,
                slidesPerRow: 4,
                // centerMode:false,
                rows: 4,
                infinite: false,
            });
        }
    } else if (slots.data.status == false) {
        RequestCallBackForm(".physical-consultation__slots-wrapper",UiParameters);
    }
    
    
}

async function confirmAppointment(body) {
    loader();

    let confirmation = await httpRequest(
        "/api/appointment/book-appointment",
        "POST",
        body
    );

    console.log(confirmation);
    if (confirmation.data.status == true) {
        let form = `<form style="display:none"  class="confirm-appointment" action="/physicalConsultation" method="Post">

    <input type="hidden" name="_token" value="${UiParameters.csrf_token}" >
    <input type="hidden" name="appointment_id" value="${confirmation.data.data.appointment_id}"/>
    <input type="hidden" name="patient_id" value="${confirmation.data.data.patient_id}"/>
    <input type="hidden" name="patient_name" value="${appointmentParameter.patient_name}"/>
    <input type="hidden" name="patient_email" value="${appointmentParameter.patient_email}"/>
    <input type="hidden" name="appointment_date" value="${confirmation.data.data.appointment_date}"/>
    <input type="hidden" name="appointment_time" value="${confirmation.data.data.appointment_time}"/>
    <input type="hidden" name="department_id" value="${confirmation.data.data.department_id}"/>
    <input type="hidden" name="speciality" value="${UiParameters.specialityName}"/>
    <input type="hidden" name="doctor_id" value="${confirmation.data.data.doctor_id}"/>
    <input type="hidden" name="doctor" value="${UiParameters.doctorName}"/>
    <input type="hidden" name="location" value="${UiParameters.locationName}"/>
    <input type="hidden" name="status" value="${confirmation.data.status}"/>
    <input type="hidden" name="response" value="${JSON.stringify(confirmation.data)}"/>

    </form>`;

        document.querySelector("body").insertAdjacentHTML("afterbegin", form);
        document.querySelector(".confirm-appointment").submit();
    } else if (confirmation.data.status == false) {
        if (confirmation.data.error_data.patient_id != undefined) {
            // document.querySelector(".pc-modal__card__description").innerHTML =
            //     "";
            alertBox(confirmation.data.error_data.patient_id[0]);
        } else {
            RequestCallBackForm(".pc-modal__card",UiParameters);
        }

        let body = {
            _token: UiParameters.csrf_token,
            patient_id: appointmentParameter.patient_id,
            patient_name: appointmentParameter.patient_name,
            patient_email: appointmentParameter.patient_email,
            appointment_date: appointmentParameter.appointment_date,
            appointment_time: UiParameters.time,
            speciality: UiParameters.specialityName,
            doctor: UiParameters.doctorName,
            location: UiParameters.locationName,
            status: 'false',
            response: JSON.stringify(confirmation.data),
        };

        const error = await httpRequest("/physicalConsultation", "POST", body);
    }
}

export async function sendOtp(mobile_no) {
    const otp = await httpRequest("/api/appointment/send-otp", "POST", {
        mobile_no,
    });

    appointmentParameter.otp_request_id = otp.data.data.request_id;
    return otp;
}

async function confirmOTPCallback(node) {
    let otp =
        node.target[0].value +
        node.target[1].value +
        node.target[2].value +
        node.target[3].value;
    let request_id = appointmentParameter.otp_request_id;
    let mobile_no = UiParameters.mobile;
    let body = { mobile_no, request_id, otp };
    const verifyOTp = await httpRequest(
        "/api/appointment/verify-otp",
        "POST",
        body
    );
    if (verifyOTp.data.status == true) {
        document.querySelector(".otp-box").nextElementSibling.innerHTML = "";
        let is_existing_patient =
            appointmentParameter.patient_type == "temporary" ? false : true;
        let doctor_id = appointmentParameter.doctor_id;
        let department_id = appointmentParameter.department_id;
        let location_id = appointmentParameter.location_id;
        let appointment_type = appointmentParameter.appointment_type;
        let appointment_date_time =
            appointmentParameter.appointment_date +
            " " +
            appointmentParameter.appointment_time;
        let booking_from = "website";
        let patient_id = appointmentParameter.patient_id;
        let body = {
            is_existing_patient,
            patient_id,
            doctor_id,
            department_id,
            location_id,
            appointment_type,
            appointment_date_time,
            booking_from,
        };
        confirmAppointment(body);
    } else {
        let message = "";
        if (verifyOTp.data.error_data != undefined) {
            message = verifyOTp.data.error_data.otp[0];
        } else {
            message = verifyOTp.data.message;
        }
        document.querySelector(".otp-box").nextElementSibling.innerHTML =
            message;
    }
}

export async function registerPatientCallBack(node) {
    if (node.target[10].checked == false) {
        return;
    }
    let formResponse = await handleFormSubmit(node);

    if (formResponse.data.status == true) {
        appointmentParameter.patient_name =
            node.target[1].value + node.target[2].value;
        appointmentParameter.patient_id = formResponse.data.data.temporary_id;
        appointmentParameter.patient_type = "temporary";
        loader();
        sendOtp(UiParameters.mobile);
        confirmOTP(UiParameters, confirmOTPCallback);
    } else {
        // return alert("Try using a diffrent mobile number");

        alertBox(
            "Can't proceed with the entered number, try using a diffrent number"
        );
    }
}

function handleSlotClick() {
    UiParameters.time = this.children[0].innerHTML;
    UiParameters.meridiem = this.children[1].innerHTML;
    appointmentParameter.appointment_type = this.getAttribute("data-type");
    appointmentParameter.appointment_time = this.getAttribute("data-time");
    removeClass(
        "physical-consultation__slots",
        "physical-consultation__slots--active"
    );
    this.classList.add("physical-consultation__slots--active");
    inputMobileForm(UiParameters, async function (node) {
        var regExp = /[a-zA-Z]/g;

        if (regExp.test(node.target[1].value)) {
            node.target[1].value = "";
        }

        if (
            node.target[1].value.length < 10 ||
            node.target[1].value.length > 10 ||
            regExp.test(node.target[1].value)
        ) {
            node.target[1].nextElementSibling.innerHTML =
                "Enter a 10 digit number";
            return;
        }
        let mobile = node.target[1].value;
        UiParameters.mobile = mobile;
        appointmentParameter.patient_email = node.target[2].value
        UiParameters.patient_email = node.target[2].value
        console.log(appointmentParameter.patient_email);
        if (mobile == "") {
            return;
        }
        loader();
        const patients = await httpRequest(
            "/api/appointment/patients",
            "POST",
            { mobile }
        );
        if (patients.data.status == true && patients.data.data.length > 0) {
            patientsList(
                UiParameters,
                patients.data.data,
                async function (node) {
                    let patient_id = document.querySelector(
                        'input[name="patient_id"]:checked'
                    ).value;
                    appointmentParameter.patient_type = document
                        .querySelector('input[name="patient_id"]:checked')
                        .getAttribute("data-type");
                    appointmentParameter.patient_name = document.querySelector(
                        'input[name="patient_id"]:checked'
                    ).nextElementSibling.innerHTML;

                    appointmentParameter.patient_id = patient_id;
                    loader();
                    sendOtp(mobile);
                    confirmOTP(UiParameters, confirmOTPCallback);
                }
            );
        } else if (
            patients.data.status == true &&
            patients.data.data.length == 0
        ) {
            registrationForm(UiParameters, registerPatientCallBack);
        } else if (patients.data.status == false) {
            // return alert("Try entering a diffrent number");
            alertBox(
                "Can't proceed with the entered number, try using a diffrent number"
            );
        }
    });
}

function handleDateClick() {
    let date = this.getAttribute("data-date");
    removeClass(
        "physical-consultation__dates",
        "physical-consultation__dates--active"
    );
    this.classList.add("physical-consultation__dates--active");
    appointmentParameter.appointment_date = date;
    let date_month = this.children[0].innerHTML;
    let day = this.children[1].innerHTML;
    UiParameters.date_month = date_month;
    UiParameters.day = day;
    let department_id = document.querySelector(".pc-speciality-select-box").value;
    let location_id = document.querySelector(".pc-location-select-box").value;
    let doctor_id = document.querySelector(
        ".pc-doctor-select-box"
    ).getAttribute('data-his-id');;
    document.querySelector(
        ".physical-consultation__slots-wrapper"
    ).innerHTML = `<div class="loader"></div>`;
    printSlots(date, department_id,doctor_id,location_id);
}

document.addEventListener("DOMContentLoaded", () => {
    let date = document
        .querySelectorAll(".physical-consultation__dates")[0]
        .getAttribute("data-date");
    appointmentParameter.appointment_date = date;
    UiParameters.appointment_date = date;
    let date_month = document.querySelectorAll(
        ".physical-consultation__dates"
    )[0].children[0].innerHTML;
    let day = document.querySelectorAll(".physical-consultation__dates")[0]
        .children[1].innerHTML;
    UiParameters.date_month = date_month;
    UiParameters.day = day;
    UiParameters.doctorName = document
        .querySelector(".pc-doctor-select-box")
        .getAttribute("data-name");
    UiParameters.csrf_token = document
        .querySelector(".pc-doctor-select-box")
        .getAttribute("data-csrf");
    UiParameters.locationName = document.querySelector(
        ".pc-location-select-box"
    ).options[
        document.querySelector(".pc-location-select-box").selectedIndex
    ].innerHTML;
    UiParameters.specialityName = document.querySelector(
        ".pc-speciality-select-box"
    ).options[
        document.querySelector(".pc-speciality-select-box").selectedIndex
    ].innerHTML;

    let department_id = document.querySelector(".pc-speciality-select-box").value;
    let location_id = document.querySelector(".pc-location-select-box").value;
    let doctor_id = document.querySelector(
        ".pc-doctor-select-box"
    ).getAttribute('data-his-id');;

    appointmentParameter.doctor_id = doctor_id;
    appointmentParameter.department_id = department_id;
    appointmentParameter.location_id = location_id;
    printSlots(
        document
            .querySelectorAll(".physical-consultation__dates")[0]
            .getAttribute("data-date"),
            department_id,
        doctor_id,
        location_id,
    );
});

domSelector(
    ".physical-consultation__dates",
    "click",
    throttle(handleDateClick, 1500)
);

domSelector("#pc-location-select-box", "change", function (e) {
    window.location.href =
        e.target.options[e.target.selectedIndex].getAttribute("data-url");
});
domSelector("#pc-speciality-select-box", "change", function (e) {
    window.location.href =
        e.target.options[e.target.selectedIndex].getAttribute("data-url");
});
