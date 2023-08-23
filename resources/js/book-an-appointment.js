import "./utils/event-handler";
import { httpRequest, showForm } from "./utils/event-handler";
let screenWidth = screen.width;

import BushraUrl from "../images/doctors/doctor.png";

function printLinks(links, previousLink, nextLink, from, to, total) {
    document.querySelector(".pagination__pages").innerHTML = "";
    if (previousLink == null) {
        previousLink = "#";
    }
    if (nextLink == null) {
        nextLink = "#";
    }
    document
        .querySelector(".pagination__buttons__button-prv")
        .setAttribute("href", previousLink);

    document
        .querySelector(".pagination__buttons__button-next")
        .setAttribute("href", nextLink);
    document.querySelector("#from").innerHTML = from;
    document.querySelector("#to").innerHTML = to;
    document.querySelector("#total").innerHTML = total;
    links.forEach((link, index) => {
        if (index != 0 && index != links.length - 1) {
            let linkHtml = `<li><a class="pagination__pages__link ${
                link.active ? `pagination__pages__link--active` : ""
            }"  href="${link.url}">${link.label}</a></li>`;
            document
                .querySelector(".pagination__pages")
                .insertAdjacentHTML("beforeend", linkHtml);
        }
        domSelector(".pagination__pages li a", "click", handlePageClicks);
    });
}
export async function printDoctors(url, body) {
    let formDetails = {};

    const response = await httpRequest(url, "POST", body);

    
    document.querySelector(".doctor-appointment-cards-wrapper").innerHTML = "";
        let doctors = [];
    if(response.data.links == undefined)
    {
        doctors = response.data;
       
    }
    else
    {
        doctors = response.data.data;
        printLinks(
            response.data.links,
            response.data.prev_page_url,
            response.data.next_page_url,
            response.data.from,
            response.data.to,
            response.data.total
        );
    }
    doctors.forEach((result) => {
        if (result.doctor == null) {
            return;
        }
        let coeName = [];
        let branchName = [];
        let branch_slug = "";
        let speciality_slug = "";

        result.doctor.coes.forEach((coe, index) => {
            if (coe.specialities.length == 0) {
                coeName.push(
                    `<a> ${coe.name}</a> ${
                        index != result.doctor.specialities.length - 1
                            ? `,`
                            : ``
                    } `
                );
                if (coe.id == body.coe_id) {
                    speciality_slug = coe.slug;
                    formDetails.speciality = coe.name;
                }
            } else {
                result.doctor.specialities.forEach((speciality, index) => {
                    if (speciality.id == body.speciality_id) {
                        speciality_slug = speciality.doctor_slug;
                        formDetails.speciality = speciality.name;
                    }

                    if (
                        !coeName.includes(
                            `<a> ${speciality.name} ${
                                index != result.doctor.specialities.length - 1
                                    ? `,`
                                    : ``
                            } </a>`
                        )
                    ) {
                        coeName.push(
                            `<a> ${speciality.name} ${
                                index != result.doctor.specialities.length - 1
                                    ? `,`
                                    : ``
                            } </a>`
                        );
                    }
                });
            }
        });
        result.doctor.branches.forEach((branch, index) => {
            if (branch.id == body.branch_id) {
                branch_slug = branch.slug;
                formDetails.branch = branch.name;
            }
            else
            {
                branch_slug = branch.slug;
            }
            branchName.push(
                `<a href="/doctors/${branch.slug}/${speciality_slug}/${
                    result.doctor.slug
                }"> ${branch.name}</a> ${
                    index != result.doctor.branches.length - 1 ? `,` : ``
                } `
            );
        });
        //

        let doctorCard = `<div class="doctors-card">
     <a href="/doctors/${branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }" class="doctors-card__lt">
         <img src="${import.meta.env.VITE_ASSET_URL}${
            result.doctor.large_image
        }" alt="">
         <div class="doctors-card__lt__details">
             <p>${result.doctor.experience} yrs <span>Experience</span></p>

             ${
                 result.doctor.fee != null
                     ? `<p>Rs. ${result.doctor.fee}<span>Fees</span> </p>`
                     : ``
             }
             
         </div>
     </a>
     <div class="doctors-card__rt">
             <div>
         <h2><a href="/doctors/${branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }">${result.doctor.name}</a></h2>
         <p class="doctors-card__rt__designation"><a href="/doctors/${branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }"> ${result.doctor.designation} </a></p>
         <p class="doctors-card__rt__speciality"><a href="">${coeName.toString()}</a></p>
         <p class="doctors-card__rt__location"> <a href="">${branchName.toString()}</a></p>

         </div>
         <div>
         <a href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}" class="doctors-card__rt__btn">
               
             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 0C15.5228 0 20 4.47715 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM10.1597 14C8.1243 14 6.29182 14.8687 5.01276 16.2556C6.38039 17.3474 8.114 18 10 18C11.9695 18 13.7727 17.2883 15.1666 16.1081C13.8956 14.8074 12.1219 14 10.1597 14ZM10 2C5.58172 2 2 5.58172 2 10C2 11.8106 2.6015 13.4807 3.61557 14.8214C5.25639 13.0841 7.58144 12 10.1597 12C12.6441 12 14.8933 13.0066 16.5218 14.6342C17.4526 13.3267 18 11.7273 18 10C18 5.58172 14.4183 2 10 2ZM10 3C12.2091 3 14 4.79086 14 7C14 9.2091 12.2091 11 10 11C7.79086 11 6 9.2091 6 7C6 4.79086 7.79086 3 10 3ZM10 5C8.8954 5 8 5.89543 8 7C8 8.1046 8.8954 9 10 9C11.1046 9 12 8.1046 12 7C12 5.89543 11.1046 5 10 5Z" fill="#E3000F"/>
</svg>

             

             <span>View Full Profile</span>
         </a>
         <a  data-name="${
             result.doctor.name
         }" data-speciality="${formDetails.speciality}" data-branch="${
            formDetails.branch
        }" href="/book-an-appointment/${branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }" class="doctors-card__rt__btn">

         <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M7.14702 0V2H13.2446V0H15.2771V2H19.3421C19.9034 2 20.3584 2.44772 20.3584 3V19C20.3584 19.5523 19.9034 20 19.3421 20H1.04946C0.488203 20 0.0332031 19.5523 0.0332031 19V3C0.0332031 2.44772 0.488203 2 1.04946 2H5.1145V0H7.14702ZM18.3259 10H2.06572V18H18.3259V10ZM6.13076 12V14H4.09824V12H6.13076ZM11.2121 12V14H9.17954V12H11.2121ZM16.2934 12V14H14.2608V12H16.2934ZM5.1145 4H2.06572V8H18.3259V4H15.2771V6H13.2446V4H7.14702V6H5.1145V4Z" fill="#E3000F"/>
         </svg>
             <span>Book a Physical Consultation</span>
         </a>
         
         </div>
     </div>
 </div>`;
        document
            .querySelector(".doctor-appointment-cards-wrapper")
            .insertAdjacentHTML("beforeend", doctorCard);
    });

    domSelector(".doctor-physical-btn", "click", showForm);

    if(response.data.links == undefined)
    {

        if( document.querySelector(".doctors__cards-wrapper").classList.contains('slick-initialized'))
        {
            $(".doctors__cards-wrapper").slick("unslick");

        }

        $('.doctors__cards-wrapper').slick({
            // dots:true,
            arrows: true,
            slidesToShow: 4,
            responsive: [
                {
                    breakpoint: 1275,
                    settings: {
                        // dots: true,
                        arrows: true,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        // dots: true,
                        arrows: true,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 769,
                    settings: {
                        // dots: true,
                        arrows: true,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 601,
                    settings: {
                        // dots: true,
                        arrows: true,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 1,
                    },
                },
            ],
        });
       
    }
}

async function printOptions(node) {
    let type = node.getAttribute("data-type");
    let coe_id = "";
    let branch_id = "";
    let selected_coe_id =
        node.parentNode.parentNode.querySelector(".coe-select-box").value || node.parentNode.parentNode.querySelector(".coe-select-box").getAttribute('data-selected-id');
        console.log(node.parentNode.parentNode.querySelector(".coe-select-box").getAttribute('data-selected-id'));
    let selected_branch_id = node.parentNode.parentNode.querySelector(
        ".location-select-box"
    ).value;
    let selected_speciality_id = node.parentNode.parentNode.querySelector(
        ".speciality-select-box"
    ).value || node.parentNode.parentNode.querySelector(".speciality-select-box").getAttribute('data-selected-id');;

    if (type == "coe") {
        coe_id = selected_coe_id;

        branch_id = "";
    }
    if (type == "location") {
        branch_id = node.value;
        coe_id =
        selected_coe_id;
    }

    let body = { coe_id, branch_id, type };

    // let type = node.parentNode.parentNode.querySelector(".coe-select-box").getAttribute('data-');
    const response = await httpRequest(
        "/api/getBranchCoeSpecialityById",
        "POST",
        body
    );

    if (type == "coe") {
        node.parentNode.parentNode.querySelector(
            ".location-select-box"
        ).innerHTML = ``;
        response.data.branches.forEach((result) => {
            let option = `<option value="${result.id}" ${
                result.id == selected_branch_id ? `selected` : ``
            }>${result.name}</option>`;

            node.parentNode.parentNode
                .querySelector(".location-select-box")
                .insertAdjacentHTML("beforeend", option);
        });
        node.parentNode.parentNode.querySelector(
            ".speciality-select-box"
        ).innerHTML = ``;
        response.data.specialities.forEach((result) => {
            let option = `<option value="${result.id}" ${
                result.id == selected_branch_id ? `selected` : ``
            }>${result.name}</option>`;

            node.parentNode.parentNode
                .querySelector(".speciality-select-box")
                .insertAdjacentHTML("beforeend", option);
        });
    }
    if (type == "location") {
        node.parentNode.parentNode.querySelector(
            ".coe-select-box"
        ).innerHTML = ``;
        response.data.coes.forEach((result, index) => {
            let option = `<option value="${result.id}" ${
                result.id == selected_coe_id ? `selected` : ``
            }>${result.name}</option>`;

            node.parentNode.parentNode
                .querySelector(".coe-select-box")
                .insertAdjacentHTML("beforeend", option);
            if (index == 0) {
                node.parentNode.parentNode.querySelector(
                    ".speciality-select-box"
                ).innerHTML = ``;
                result.specialities.forEach((speciality) => {
                    let option = `<option value="${speciality.id}" ${
                        speciality.id == selected_speciality_id
                            ? `selected`
                            : ``
                    }>${speciality.name}</option>`;

                    node.parentNode.parentNode
                        .querySelector(".speciality-select-box")
                        .insertAdjacentHTML("beforeend", option);
                });
            }
        });

        if (
            response.data.specialities != undefined &&
            response.data.specialities.length > 0
        ) {
            node.parentNode.parentNode.querySelector(
                ".speciality-select-box"
            ).innerHTML = ``;
            response.data.specialities.forEach((speciality) => {
                let option = `<option value="${speciality.id}" ${
                    speciality.id == selected_speciality_id ? `selected` : ``
                }>${speciality.name}</option>`;

                node.parentNode.parentNode
                    .querySelector(".speciality-select-box")
                    .insertAdjacentHTML("beforeend", option);
            });
        }
    }

    coe_id = node.parentNode.parentNode.querySelector(".coe-select-box").value;
    branch_id = node.parentNode.parentNode.querySelector(
        ".location-select-box"
    ).value;
    let speciality_id = node.parentNode.parentNode.querySelector(
        ".speciality-select-box"
    ).value;
    let paginate = true;
    if (screenWidth < 769) {

        paginate = false;
            
    
        }
    // let speciality_id = "";
    let doctorBody = { coe_id, branch_id, speciality_id, paginate };

    // $(".specialists-slider").slick("unslick");
    printDoctors("/api/getDoctorByBranchCoeSpeciality", doctorBody);
}
async function handleChange(type) {

    printOptions(this);

    // let coe_id = this.parentNode.parentNode.querySelector(
    //     ".coe-select-box"
    // ).value;
    // let branch_id = this.parentNode.parentNode.querySelector(
    //     ".location-select-box"
    // ).value;
    // let paginate = true;
    // let speciality_id = "";
    // let body = { coe_id, branch_id, speciality_id,paginate};

    //     $(".specialists-slider").slick("unslick");
    //     printDoctors('/api/getDoctorByBranchCoeSpeciality',body);
}

function handlePageClicks(e) {
    e.preventDefault();
    console.log(this.getAttribute("href"));
    let coe_id = document.querySelector(".coe-select-box").value;
    let branch_id = document.querySelector(".location-select-box").value;
    let paginate = true;
    let speciality_id = "";
    let body = { coe_id, branch_id, speciality_id, paginate };

    // $(".specialists-slider").slick("unslick");
    printDoctors(this.getAttribute("href"), body);
}

document.addEventListener("DOMContentLoaded", () => {
    if (screenWidth < 769) {
        document.querySelector('.pagination').remove()

        document.querySelector('.doctors__cards-wrapper ').classList.remove('doctors__cards-wrapper--flex-list');

    }

    let coe_id = document.querySelector(".coe-select-box").value;
    let branch_id = document.querySelector(".location-select-box").value;
    let paginate = true;
    
    let speciality_id = "";
    // let body = { coe_id, branch_id, speciality_id, paginate };
    printOptions(document.querySelector(".location-select-box"));
    // printDoctors('/api/getDoctorByBranchCoeSpeciality',body);
});

domSelector(".coe-select-box", "change", handleChange);
domSelector(".location-select-box", "change", handleChange);
domSelector(".speciality-select-box", "change", handleChange);

domSelector(".pagination__buttons a", "click", handlePageClicks);
