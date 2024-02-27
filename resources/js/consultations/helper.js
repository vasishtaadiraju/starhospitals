import { throttle } from "../utils/event-handler";
import { registerPatientCallBack, sendOtp } from "./physical";

export function inputMobileForm(parameters, fn) {
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }
    let formHtml = `<div class="pc-modal">



    <div class="pc-modal__card ">
        <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                    fill="black" />
            </svg>
        </span>
        <div class="pc-modal__card__inner-box">
    <h3 class="pc-modal__card__title">Confirm Appointment</h3>

    <p class="pc-modal__card__description">Kindly confirm your Physical Consultation with <span>${parameters.doctorName}</span>. </p>

    <div class="pc-modal__card__date-time">
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="black"/>
                    </svg>
                    
            </span>
            <p>
                Date    <br>
                <strong>${parameters.date_month}</strong>  (${parameters.day})

            </p>
        </div>
        <div>
            <span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z" fill="black"/>
            </svg>
            
                    
            </span>
            
            <p>
                Time    <br>
                <strong>${parameters.time}</strong>  ${parameters.meridiem}

            </p>
            

        </div>
    </div>

    <p class="pc-modal__card__label">
        Please enter the registered mobile number and email for the specific patient.
    </p>

    <div>
        <form class="enter-mobile-number-form" action="/">
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-3 form-fields-wrapper--col-3--no-wrap">
                <div class="form-fields-wrapper ">
                    <input type="text" placeholder="India (+91)" disabled>
                </div>
            </div>
            <div class="form-fields-wrapper form-fields-wrapper--col-0 form-fields-wrapper--col-0--no-wrap">
                <div class="form-fields-wrapper ">
                    <input placeholder="Registered Mobile Number" class="mobile-input-field" type="number" name="mobile" maxlength="10">
                   
                    <span class="error-message"></span>
                    
                </div>
            </div>
        </div>
        <div class="form-fields">
            
            <div class="form-fields-wrapper form-fields-wrapper--col-1 form-fields-wrapper--col-0--no-wrap">
                <div class="form-fields-wrapper ">
                    <input placeholder="Email ID" class="mobile-input-field" type="email" name="patient_email" required>
                   
                    <span class="error-message"></span>
                    
                </div>
            </div>
        </div>

        <button type="submit" class="pc-modal__card__btn">Proceed</button>
        <form>
    </div>
</div>

</div>
</div>`;

    document.querySelector("body").insertAdjacentHTML("afterbegin", formHtml);

    document
        .querySelector(".pc-modal__cross")
        .addEventListener("click", function () {
            this.parentElement.parentElement.remove();
        });
        document.querySelector('.mobile-input-field').addEventListener('keyup',function(){
        var regExp = /[a-zA-Z]/g;

            
                this.value = this.value.slice(0,10);
            
        })
        

    document
        .querySelector(".enter-mobile-number-form")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            fn(e);
        });
}

export function patientsList(parameters, patients, fn) {
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }
    let formHtml = `
    <div class="pc-modal">
        <div class="pc-modal__card ">
            <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                        fill="black" />
                </svg>
            </span>
            <div class="pc-modal__card__inner-box">
            <h3 class="pc-modal__card__title">Choose Patient Name</h3>
        
            <p class="pc-modal__card__description">Kindly click to choose Patient Name and Patient ID for your
                consultation with <span>${parameters.doctorName}</span>. </p>
                <form class="select-patient-form" action="#" >
        
            <div class="pc-modal__card__patient-table">
                <table>
                    <thead>
                        <tr>
                        <td class="pc-modal__card__patient-table__heading">Patient Name</td>
                        <td class="pc-modal__card__patient-table__heading">Patient ID</td>
                        <td class="pc-modal__card__patient-table__heading">Registration Date</td>
                        </tr>
                    </thead>
        
                    <tbody class="patients-list-container">
                        <tr>
                            <td class="">
                                
                            </td>
                            <td class="pc-modal__card__patient-table__name">
                                <input type="radio" name="name" checked>
                                <label for="name">Rohan Sharma</label>
                            </td>
                            <td class="pc-modal__card__patient-table__patient-id">112345</td>
                            <td class="pc-modal__card__patient-table__registration">
                                10th Dec, 2020
                            </td>
                        </tr>
                        <tr>
                            <td class="">
                                
                            </td>
                            <td class="pc-modal__card__patient-table__name">
                                <input type="radio" name="name">
                                <label for="name">Rohan Sharma</label>
                            </td>
                            <td class="pc-modal__card__patient-table__patient-id">112345</td>
                            <td class="pc-modal__card__patient-table__registration">
                                10th Dec, 2020
                            </td>
                        </tr>
                    </tbody>
        
                    
                </table>
            </div>
                        
            <div class="pc-modal__card__patient-table__add-patient">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"
                        fill="#E3000F" />
                </svg>

                <label for="name" class="add-new-patient">Add new patient</label>
            </div>
            
            <button class="pc-modal__card__btn">Proceed</button>
        
            </form>
        
        </div>

        </div>
    </div>`;

    document.querySelector("body").insertAdjacentHTML("afterbegin", formHtml);

    document.querySelector(".patients-list-container").innerHTML = "";

    patients.forEach((patient, index) => {
        let date = new Date(
            patient.registered_on.split(" ")[0].replace("-", " ")
        );
        date = date.toLocaleString("en-GB", {
            day: "2-digit",
            month: "short",
            year: "numeric",
        });
        console.log(date);
        let row = `<tr>
    
    <td class="pc-modal__card__patient-table__name">
        <input type="radio" class="radio-field radio" name="patient_id" id="pt-${index}" value="${
            patient.pid != undefined ? patient.pid : patient.temporary_id
        }" data-type="${
            patient.pid != undefined ? `permanent` : `temporary`
        }" ${index == 0 ? `checked` : ``}>
        <label for="pt-${index}">${patient.name_first} ${
            patient.name_last
        }</label>
    </td>
    <td class="pc-modal__card__patient-table__patient-id"> <span class="pc-modal__card__patient-table__patient-id--mob">Patient ID: </span>${
        patient.pid != undefined ? patient.pid : patient.temporary_id
    }</td>
    <td class="pc-modal__card__patient-table__registration">
        <span class="pc-modal__card__patient-table__patient-id--mob">Registration Date: </span>  ${date}
    </td>
</tr>`;
        // 10th Dec, 2020
        document
            .querySelector(".patients-list-container")
            .insertAdjacentHTML("beforeend", row);
    });

    document
        .querySelector(".pc-modal__cross")
        .addEventListener("click", function () {
            this.parentElement.parentElement.remove();
        });
        
        document
        .querySelector(".add-new-patient")
        .addEventListener("click", function () {
            registrationForm(parameters,registerPatientCallBack)
        });
    document
        .querySelector(".select-patient-form")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            fn(e);
        });
}

export function registrationForm(parameters,fn) {
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }
    let formHtml = `
    <div class="pc-modal">
        <div class="pc-modal__card pc-modal__card__inner-box--registration">
            <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                        fill="black" />
                </svg>
            </span>
            <div class="pc-modal__card__inner-box ">
            <h3 class="pc-modal__card__title">Register Yourself</h3>
        
            <p class="pc-modal__card__description pc-modal__card__description--regitration">Kindly fill out this form to make an appointment with our doctor.</p>
        
            <div class="pc-modal__card__registration-form">
        
                <form class="patient-registration-form-submit" action="/api/appointment/register-patients">
                
                                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                        <select placeholder="Last Name" name="title" type="text">
                        <option>Mr</option><option>Ms</option><option>Baby</option><option>Dr</option>
                    </select>
                            
                                <span class="error-message"></span>
                            
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="First Name" name="first_name" type="text">
                            
                                <span class="error-message"></span>
                            
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Last Name" name="last_name" type="text">
                            
                            <span class="error-message"></span>
                            
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2 form-fields-wrapper--col-2--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Age" name="age" type="text">
                            
                                <span class="error-message"></span>
                            
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2 form-fields-wrapper--col-2--no-wrap">
                        <div class="form-fields-wrapper ">
                            <select placeholder="Last Name" name="gender" type="text">
                                <option value=""> Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            
                            <span class="error-message"></span>
                            
                        </div>
                    </div>
                </div>
                
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-3 form-fields-wrapper--col-3--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input type="text" placeholder="India (+91)" disabled>
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-0 form-fields-wrapper--col-0--no-wrap">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number" type="number" name="phone" value="${parameters.mobile}" disabled>
                            
                            <span class="error-message"></span>
                            
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Email Id" type="text" name="email" value="${parameters.patient_email}" >
                            
                            <span class="error-message"></span>
                            
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Address" type="text" name="address">
                            
                            <span class="error-message"></span>
                            
                        </div>
                    </div>
        
                    <input placeholder="Address" type="hidden" name="request_from" value="WEBBOT">

                </div>
                <div class="pc-modal__card__checkbox">
                    
                    <input class="register-checkbox" id="register-patient-checkbox" type="checkbox" required>
                    <label for="register-patient-checkbox">I understand, accept and agree to the terms & conditions. I hereby authorise Star Hospitals and their authorised partners to contact me through email and SMS or any other modes of communication. It will override my registry on NCPR.</label>
                </div>
                <button class="pc-modal__card__btn">Submit</button>
        
            </form>
            </div>
            
        </div>

        </div>
    </div>`;

    document.querySelector("body").insertAdjacentHTML("afterbegin", formHtml);

    document
        .querySelector(".pc-modal__cross")
        .addEventListener("click", function () {
            this.parentElement.parentElement.remove();
        });

    document
        .querySelector(".patient-registration-form-submit")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            fn(e);
        });
}

export function loader() {
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }
    // <div class="pc-modal__card">
    //     </div>
    let formHtml = `
    <div class="pc-modal">
        
            <div class="loader" > </div>

        
    </div>`;

    document.querySelector("body").insertAdjacentHTML("afterbegin", formHtml);
}

export function confirmOTP(parameters, fn) {
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }
    let formHtml = `
    <div class="pc-modal">
        <div class="pc-modal__card ">
            <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                        fill="black" />
                </svg>
            </span>
            <div class="pc-modal__card__inner-box">
    <h3 class="pc-modal__card__title">Confirm OTP</h3>

    <p class="pc-modal__card__description">Kindly confirm your Physical Consultation with <span>${parameters.doctorName}</span>. </p>

    <div class="pc-modal__card__date-time">
        <div>
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"
                        fill="black" />
                </svg>

            </span>
            <p>
                Date <br>
                <strong>${parameters.date_month}</strong> (${parameters.day})
            </p>
        </div>
        <div>
            <span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z" fill="black"/>
            </svg>
            

            </span>

            <p>
                Time <br>
                <strong>${parameters.time}</strong> (${parameters.meridiem})
            </p>


        </div>
    </div>

    <p class="pc-modal__card__label">
        We have sent you an OTP on ${parameters.mobile}
    </p>

    <div>
    <form action="#" class="confirm-otp-form" >
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-1">
                <div class="form-fields-wrapper pc-modal__card__otp-label">
                    <span style="margin-bottom:1em" for=""> Enter OTP <sup
                            style="color:#E3000F">*</sup></span>
                    <div class="otp-box">
                    <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
	<input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
	<input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
	<input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                    </div>
                    <span class="error-message"> </span>
                    
                </div>
            </div>

        </div>

        <button type="submit" class="pc-modal__card__btn">Verify OTP</button>
    </form>
    </div>

    <p class="pc-modal__card__label pc-modal__card__label--resend">
        Didn’t receive OTP? <span data-mobile="" class="resend-button">Resend</span> <span id="resend-timer" style="border:none"><span>
    </p>
</div>

        </div>
    </div>`;

    document.querySelector("body").insertAdjacentHTML("afterbegin", formHtml);

    document
        .querySelector(".pc-modal__cross")
        .addEventListener("click", function () {
            this.parentElement.parentElement.remove();
        });

    document
        .querySelector(".confirm-otp-form")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            fn(e);
        });

        function counter() {
            var i = 59;
            
            setInterval(function() {
              if (i == -1) 
              {
                clearInterval(this);
                // $('#resend-timer').html("");
                document.querySelector('#resend-timer').innerHTML = "";
        
              }
              else 
              {
                // $('#resend-timer').html(i--);
                document.querySelector('#resend-timer').innerHTML = i--;

                
              }
              
            }, 1000);
          }
        
        document.querySelector('.resend-button').addEventListener('click',throttle(async function(){
                let response = await sendOtp(parameters.mobile);
                console.log(response);
                if (response.data.status === true) {
                    // $("#resend-otp").css("background-color", "gray");
                    this.style.color = 'gray';
                    this.style.border = 'none';

                counter()
                setTimeout(() => {
                    // $("#resend-otp").css("background-color", "#7C3996");
                    
                    document.querySelector('.resend-button').style.color = '#E3000F'
                    this.style.borderBottom = '1px solid #004E9E';

                }, 60000);
                }
                
        },60000))


        $(".confirm-otp-form")
    .find("input")
    .each(function () {
        $(this).attr("maxlength", 1);
        $(this).on("keyup", function (e) {
            var parent = $($(this).parent());

            if (e.keyCode === 8 || e.keyCode === 37) {
                var prev = parent.find("input#" + $(this).data("previous"));

                if (prev.length) {
                    $(prev).select();
                }
            } else if (
                (e.keyCode >= 48 && e.keyCode <= 57) ||
                (e.keyCode >= 65 && e.keyCode <= 90) ||
                (e.keyCode >= 96 && e.keyCode <= 105) ||
                e.keyCode === 39
            ) {
                var next = parent.find("input#" + $(this).data("next"));

                if (next.length) {
                    $(next).select();
                } else {
                    if (parent.data("autosubmit")) {
                        parent.submit();
                    }
                }
            }
        });
    });
}

export function RequestCallBackForm(className,parameters){
    let formHTML = `
    ${className == '.pc-modal__card' ? `<span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
        fill="black" />
</svg>
</span>` : ``}
    <div class="pc-modal__card__inner-box ">
    <p class="pc-modal__card__description pc-modal__card__description--regitration" style="color:red !important">Sorry, No available slots for the selected date & location. Kindly fill out the form below to request a callback.</p>

    <div class="pc-modal__card__registration-form">

        <form action="/request-callback" method="post">
        <div class="form-fields">
    <input type="hidden" name="_token" value="${parameters.csrf_token}" >

            <div class="form-fields-wrapper form-fields-wrapper--col-1">
                <div class="form-fields-wrapper ">
                    <input placeholder="Name" name="name" type="text" required>
                    
                        <span class="error-message"></span>
                    
                </div>
            </div>
        </div>
        
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-3 form-fields-wrapper--col-3--no-wrap">
                <div class="form-fields-wrapper ">
                    <input type="text" name="" placeholder="India (+91)"  disabled>
                    <input type="hidden" name="country_code" placeholder="India (+91)" value="91" readonly>
                </div>
            </div>
            <div class="form-fields-wrapper form-fields-wrapper--col-0 form-fields-wrapper--col-0--no-wrap">
                <div class="form-fields-wrapper ">
                    <input placeholder="Phone Number" type="number" name="contact" required>
                    
                    <span class="error-message"></span>
                    
                </div>
            </div>
        </div>
        <div class="form-fields">
            <div class="form-fields-wrapper form-fields-wrapper--col-1">
                <div class="form-fields-wrapper ">
                    <input placeholder="Email Id" type="email" name="email" required>
                    
                    <span class="error-message"></span>
                    
                </div>
            </div>                
        </div>
        
         <input type="hidden" name="date" value="${parameters.appointment_date}"> 
         <input type="hidden" name="department" value="${parameters.specialityName}"> 
         <input type="hidden" name="doctor" value="${parameters.doctorName}"> 
         <input type="hidden" name="branch" value="${parameters.locationName}"> 
        <button class="pc-modal__card__btn">Submit</button>

    </form>
    </div>
    
</div>`
if(document.querySelector(className) == null)
{
let modalHtml = `<div class="pc-modal">
<div class="pc-modal__card pc-modal__card__inner-box--registration">


</div>
</div>`

document.querySelector("body").insertAdjacentHTML("afterbegin", modalHtml);

}
document.querySelector(className).innerHTML = "";
document.querySelector(className).insertAdjacentHTML('beforeend',formHTML);
if(document
    .querySelector(".pc-modal__cross") != null)
    {
        document
        .querySelector(".pc-modal__cross")
        .addEventListener("click", function () {
            this.parentElement.parentElement.remove();
        });
    }

}



export function alertBox(message){
    if (document.querySelector(".pc-modal") != undefined) {
        document.querySelector(".pc-modal").remove();
    }

//     {{-- <div class="alert-circle">
//     <div class="alert-circle__inner-line"></div>
// </div> --}}
    let alertHtml = `<div class="pc-modal ">



    <div class="pc-modal__card alert-box">
        <span class="pc-modal__cross"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z"
                    fill="black" />
            </svg>
        </span>
      <div class="pc-modal__card__inner-box ">
        <div class="alert-message">
           
            <div class="alert-message__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#e3000f" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
            </div>
            <div class="alert-messsge">${message}</div>
        </div>
                
      </div>
        

    </div>
</div>`
document.querySelector("body").insertAdjacentHTML("afterbegin", alertHtml);
document
.querySelector(".pc-modal__cross")
.addEventListener("click", function () {
    this.parentElement.parentElement.remove();
});
}

// ============================================OTP Boxes==============================




