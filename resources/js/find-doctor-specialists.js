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
    if(doctors.length == 0)
    {
        let errorMessage = `<div><h3 style="text-align:center;padding:3em;font-family:Plus Jakarta Sans Semi Bold">No doctors available for the respective selection.</h3></div>`
        document
        .querySelector(".doctor-appointment-cards-wrapper")
        .insertAdjacentHTML("beforeend", errorMessage);
    }
    doctors.forEach((result) => {
        if(result.doctor == null)
        {
            return;
        }
        
            let coeName = [];
            let branchName = [];
            let branch_slug = "";
            let speciality_slug = "";
            // let coe_slug = "";

            result.doctor.coes.forEach((coe, index) => {
                if (coe.specialities.length == 0) {
                    coeName.push(`<a style="padding:0.5em;background-color:#004E9E12;color:#004E9E !important;font-weight:500 !important;font-family:'Plus Jakarta Sans Semi Bold';border-radius:5px" href="#"> ${coe.name}</a> ${index != result.doctor.specialities.length -1  ? `` : ``} `);
                    if(coe.id == body.coe_id)
                    {
                        speciality_slug = coe.slug;
                        formDetails.speciality  = coe.name;

                    }
                } else {
                    result.doctor.specialities.forEach((speciality, index) => {
                        if(speciality.id == body.speciality_id)
                    {
                        speciality_slug = speciality.doctor_slug;
                        formDetails.speciality  = speciality.name;

                    }
                        if (
                            !coeName.includes(
                                `<a style="padding:0.5em;background-color:#004E9E12;color:#004E9E !important;font-weight:500 !important;font-family:'Plus Jakarta Sans Semi Bold';border-radius:5px"> ${speciality.name} ${index != result.doctor.specialities.length -1 ? `` : ``} </a>`
                            )
                        ) {
                            coeName.push(
                                `<a style="padding:0.5em;background-color:#004E9E12;color:#004E9E !important;font-weight:500 !important;font-family:'Plus Jakarta Sans Semi Bold';border-radius:5px"> ${speciality.name} ${index != result.doctor.specialities.length -1  ? `` : ``} </a>`
                            );
                        }
                    });
                }
            });
            result.doctor.branches.forEach((branch,index) => {
                if(branch.id == body.branch_id)
                {
                    branch_slug = branch.slug;
                    formDetails.branch  = branch.name;

                }
                
                // branchName.push(`<a href="/doctors/${branch.slug}/${speciality_slug}/${
                //     result.doctor.slug
                // }"> ${branch.name}</a> ${index != result.doctor.branches.length -1  ? `` : ``} `);
            });
            //

            

            let doctorCard = `<div class="doctors-card doctors-card--find-doctor">
        <a href="/doctors/${branch_slug == "" ? result.doctor.branches[0].slug : branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }"><img class="doctors-card--primary__doctor-img" style="width:100%" src="${
                import.meta.env.VITE_ASSET_URL
            }${result.doctor.small_image}" alt="" /></a> 
 
         
         <div class="doctors-card--primary__info">
             <h4><a href="/doctors/${branch_slug == "" ? result.doctor.branches[0].slug : branch_slug}/${speciality_slug}/${result.doctor.slug}">${
                result.doctor.name
            }</a></h4>
            <p class="doctors-card--primary__designation" style="margin-top:0.5em"><a href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}"> ${
                result.doctor.designation
            } </a></p>

             <p class="doctors-card--primary__speciality" style="display:flex;flex-wrap:wrap;gap:0.25em;margin-top:0.75em">${coeName.map(name=>{
                return `${name}`;
             })} </p>
             <p class="doctors-card--primary__location"></p>
     </div>
             <div class="doctors-card--primary__button-wrapper" >
           <div href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}" class="doctors-card__rt__btn">
               
           <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9 18.8995L13.9497 13.9497C16.6834 11.2161 16.6834 6.78392 13.9497 4.05025C11.2161 1.31658 6.78392 1.31658 4.05025 4.05025C1.31658 6.78392 1.31658 11.2161 4.05025 13.9497L9 18.8995ZM9 21.7279L2.63604 15.364C-0.87868 11.8492 -0.87868 6.15076 2.63604 2.63604C6.15076 -0.87868 11.8492 -0.87868 15.364 2.63604C18.8787 6.15076 18.8787 11.8492 15.364 15.364L9 21.7279ZM9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.8954 7 7 7.89543 7 9C7 10.1046 7.8954 11 9 11ZM9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z" fill="#004E9E"/>
           </svg>
           

             

             <span style="font-size:14px"> ${result.doctor.branches.map((branch,index)=>{
                
                if(index != result.doctor.branches.length - 1)
                {
                    return `<a href="/doctors/${branch.slug}/${speciality_slug}/${
                                result.doctor.slug
                           }">${branch.name}</a> | `
                }
              return `<a href="/doctors/${branch.slug}/${speciality_slug}/${
                             result.doctor.slug
                     }">${branch.name}</a>`             }).toString().replace(',','')}</span>
         </div>
             <a   style="font-family:'Plus Jakarta Sans Semi Bold'" data-name="${result.doctor.name}" data-speciality="${formDetails.speciality}" data-branch="${formDetails.branch}" href="/book-an-appointment/${branch_slug == "" ? result.doctor.branches[0].slug : branch_slug}/${speciality_slug}/${result.doctor.slug}" class="doctors-card__rt__btn">
                
             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M7 0V2H13V0H15V2H19C19.5523 2 20 2.44772 20 3V19C20 19.5523 19.5523 20 19 20H1C0.44772 20 0 19.5523 0 19V3C0 2.44772 0.44772 2 1 2H5V0H7ZM18 10H2V18H18V10ZM6 12V14H4V12H6ZM11 12V14H9V12H11ZM16 12V14H14V12H16ZM5 4H2V8H18V4H15V6H13V4H7V6H5V4Z" fill="#E3000F"/>
             </svg>
             

                 <span>Book an Appointment</span>
             </a>
             
             
             </div/>
         
         
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
        "/api/getCOESpecilityBranchBySpecialist",
        "POST",
        body
    );

    if (type == "coe") {
        node.parentNode.parentNode.querySelector(
            ".location-select-box"
        ).innerHTML = `<option  data-id="1" value="hyderabad">Hyderabad</option>`;
        response.data.branches.forEach((result) => {
            let option = `<option data-slug="${result.slug}" value="${result.id}" ${
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
            let option = `<option data-slug="${result.doctor_slug}" value="${result.id}" ${
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
            if(result.specialities.length == 0)
            {
                return;
            }
            let option = `<option data-slug="${result.slug}" value="${result.id}" ${
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
                    let option = `<option data-slug="${speciality.doctor_slug}" value="${speciality.id}" ${
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
                let option = `<option data-slug="${speciality.doctor_slug}" value="${speciality.id}" ${
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