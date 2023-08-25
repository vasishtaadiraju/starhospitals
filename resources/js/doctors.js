import "./utils/event-handler";
import { handleFormSubmit, httpRequest, showForm } from "./utils/event-handler";

import BushraUrl from "../images/doctors/doctor.png";


// function showForm()
// {
//     let speciality = this.getAttribute('data-speciality');
//     let branch = this.getAttribute('data-branch');
//     let name = this.getAttribute('data-name');
//     let href = this.getAttribute('data-href');
//     const formHtml = `<div class="p-enq">
//         <span class="p-enq__close">X</span>
//         <div class="p-enq__wrapper">
//             <h2>Please Fill in Your Details</h2>
//             <form class="patient-enquiry-form" action="/api/patient" method="post">
                
//                 <div class="form-fields">
//                     <div class="form-fields-wrapper form-fields-wrapper--col-1">
//                         <div class="form-fields-wrapper ">
//                             <input placeholder="Name" type="text"
//                                 class=""
//                                 name="name">
//                         <span class="error-message"> </span/>

                            
//                         </div>
//                     </div>
    
//                 </div>
//                 <div class="form-fields">
//                     <div class="form-fields-wrapper form-fields-wrapper--col-1">
//                         <div class="form-fields-wrapper ">
//                             <input placeholder="Email"
//                                 type="text"class=""
//                                 name="email">
//                         <span class="error-message"> </span/>

                           
//                         </div>
//                     </div>
//                     <div class="form-fields-wrapper form-fields-wrapper--col-1">
//                         <div class="form-fields-wrapper ">
//                             <input placeholder="Phone Number"
//                                 type="text"class=""
//                                 name="contact">
//                         <span class="error-message"> </span/>

                           
//                         </div>
//                     </div>
//                 </div>
//                 <div class="form-fields">
//                     <div class="form-fields-wrapper form-fields-wrapper--col-2">
//                         <div class="form-fields-wrapper ">
                            
//                         <input placeholder="Speciality" 
//                         type="text"class=""
//                         name="speciality" value="${speciality}" disabled>
//                         <span class="error-message"> </span/>

//                         </div>
//                     </div>
//                     <div class="form-fields-wrapper form-fields-wrapper--col-2">
//                         <div class="form-fields-wrapper ">
//                             <input
//                                 type="text"class=""
//                                 name="branch" value="${branch}" placeholder="Branch" disabled>
//                         <span class="error-message"> </span/>
                            
//                         </div>
//                     </div>
//                 </div>
//                 <div class="form-fields">
//                     <div class="form-fields-wrapper form-fields-wrapper--col-1">
//                         <div class="form-fields-wrapper ">
                            
//                         <input placeholder="Doctor Name" 
//                         type="text"class=""
//                         name="doctor" value="${name}" disabled>
//                         </div>
//                         <span class="error-message"> </span/>
//                     </div>
                    
//                 </div>
//                 <input type="hidden" value="${href}" name="href"/>
//                 <button class="form-submit-button" >Submit</button>
//             </form>
//         </div>
//     </div>
//         `
        
//         document.querySelector('body').insertAdjacentHTML('afterbegin',formHtml);
//         document.querySelector('.p-enq__close').addEventListener('click',async function(){
//             this.parentNode.remove();
//         })
//         // document.querySelector('.p-enq').addEventListener('click',function(){
//         //     this.remove();
//         // })

//         document.querySelector('.patient-enquiry-form').addEventListener('submit',async function(e){
//             let formResponse = await handleFormSubmit(e);

//             console.log(formResponse);
//             if(formResponse.status.status == 200)
//             {
//                 window.open(formResponse.data.href,'_blank');
//             }
//         });
// }

async function printDoctors(body, selectBox, className) {
    let formDetails = {};
    const response = await httpRequest(
        "/api/getDoctorByBranchCoeSpeciality",
        "POST",
        body
    );
    if((className == ".banjara-hills-slider" || className == ".financial-slider")  && response.data.length == 0)
    {
        

        // console.log(document.querySelector(className).previousElementSibling.previousElementSibling);
        document.querySelector(className).previousElementSibling.previousElementSibling.remove()
        document.querySelector(className).previousElementSibling.remove()
        document.querySelector(className).remove()

       if(document.querySelector('.coe-page').childElementCount == 1)
       {
        document.querySelector('.coe-page').previousElementSibling.remove();
        document.querySelector('.coe-page').remove();
       }
        
        
    }

    if(response.data.length == 0)
    {
        let errorMessage = `<div><h3 style="text-align:center;padding:3em;font-family:Plus Jakarta Sans Semi Bold">No doctors available for the respective selection.</h3></div>`
        document
                .querySelector(className)
                .insertAdjacentHTML("beforeend", errorMessage);
    }
    
    response.data.forEach((result) => {
        if(result.doctor == null)
        {
            return;
        }
        if (selectBox == true) {
           let branch_slug =  document.getElementsByClassName("location-select-box")[0].options[document.getElementsByClassName("location-select-box")[0].selectedIndex].getAttribute('data-slug');
            
           let coe_slug =  document.getElementsByClassName("coe-select-box")[0].options[document.getElementsByClassName("coe-select-box")[0].selectedIndex].getAttribute('data-slug');
           let speciality_slug =  document.getElementsByClassName("speciality-select-box")[0].options[document.getElementsByClassName("speciality-select-box")[0].selectedIndex].getAttribute('data-slug');
    // window.location.href = e.target.options[e.target.selectedIndex].getAttribute('data-url');

            if(speciality_slug == "")
            {
                speciality_slug == coe_slug;
            }
            let doctorOption = `<option value="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}">${result.doctor.name}</option>`;
            document
                .querySelector(className)
                .insertAdjacentHTML("beforeend", doctorOption);
        } else {
            let coeName = [];
            let branchName = [];
            let branch_slug = "";
            let speciality_slug = "";
            // let coe_slug = "";

            result.doctor.coes.forEach((coe, index) => {
                if (coe.specialities.length == 0) {
                    coeName.push(`<a href="#"> ${coe.name}</a> ${index != result.doctor.specialities.length -1  ? `,` : ``} `);
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
                                `<a > ${speciality.name} ${index != result.doctor.specialities.length -1 ? `,` : ``} </a>`
                            )
                        ) {
                            coeName.push(
                                `<a > ${speciality.name} ${index != result.doctor.specialities.length -1  ? `,` : ``} </a>`
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
                branchName.push(`<a href="/doctors/${branch.slug}/${speciality_slug}/${
                    result.doctor.slug
                }"> ${branch.name}</a> ${index != result.doctor.branches.length -1  ? `` : ``} `);
            });
            //

            

            let doctorCard = `<div class="doctors-card doctors-card--primary">
        <a href="/doctors/${branch_slug}/${speciality_slug}/${
            result.doctor.slug
        }"><img class="doctors-card--primary__doctor-img" style="width:100%" src="${
                import.meta.env.VITE_ASSET_URL
            }${result.doctor.small_image}" alt="" /></a> 
 
         <div class="doctors-card--primary__content">
         <div class="doctors-card--primary__info">
             <h4><a href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}">${
                result.doctor.name
            }</a></h4>
            <p class="doctors-card--primary__designation"><a href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}"> ${
                result.doctor.designation
            } </a></p>

             <p class="doctors-card--primary__speciality">${coeName.toString()} </p>
             <p class="doctors-card--primary__location">${branchName.toString()}</p>
     </div>
             <div class="doctors-card--primary__button-wrapper" >
             <a href="/doctors/${branch_slug}/${speciality_slug}/${result.doctor.slug}" class="doctors-card__rt__btn">
               
             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 0C15.5228 0 20 4.47715 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM10.1597 14C8.1243 14 6.29182 14.8687 5.01276 16.2556C6.38039 17.3474 8.114 18 10 18C11.9695 18 13.7727 17.2883 15.1666 16.1081C13.8956 14.8074 12.1219 14 10.1597 14ZM10 2C5.58172 2 2 5.58172 2 10C2 11.8106 2.6015 13.4807 3.61557 14.8214C5.25639 13.0841 7.58144 12 10.1597 12C12.6441 12 14.8933 13.0066 16.5218 14.6342C17.4526 13.3267 18 11.7273 18 10C18 5.58172 14.4183 2 10 2ZM10 3C12.2091 3 14 4.79086 14 7C14 9.2091 12.2091 11 10 11C7.79086 11 6 9.2091 6 7C6 4.79086 7.79086 3 10 3ZM10 5C8.8954 5 8 5.89543 8 7C8 8.1046 8.8954 9 10 9C11.1046 9 12 8.1046 12 7C12 5.89543 11.1046 5 10 5Z" fill="#E3000F"/>
</svg>

             

             <span>View Full Profile</span>
         </a>
             <a  data-name="${result.doctor.name}" data-speciality="${formDetails.speciality}" data-branch="${formDetails.branch}" href="/book-an-appointment/${branch_slug}/${speciality_slug}/${result.doctor.slug}" class="doctors-card__rt__btn">
                
             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M7 0V2H13V0H15V2H19C19.5523 2 20 2.44772 20 3V19C20 19.5523 19.5523 20 19 20H1C0.44772 20 0 19.5523 0 19V3C0 2.44772 0.44772 2 1 2H5V0H7ZM18 10H2V18H18V10ZM6 12V14H4V12H6ZM11 12V14H9V12H11ZM16 12V14H14V12H16ZM5 4H2V8H18V4H15V6H13V4H7V6H5V4Z" fill="#E3000F"/>
             </svg>
             

                 <span>Book a Physical Consultation</span>
             </a>
             
             
             </div/>
         </div>
         
     </div>`;
            document
                .querySelector(className)
                .insertAdjacentHTML("beforeend", doctorCard);
        }
    });

        // domSelector('.')
        domSelector(".doctor-physical-btn", "click", showForm);
        
    
    // $('.specialists-slider').slick('refresh')
    if (selectBox != true && response.data.length > 0) {
        $(className).slick({
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
                    breakpoint: 768,
                    settings: {
                        // dots: true,
                        arrows: true,
                        centerMode: true,
                        centerPadding: "0px",
                        slidesToShow: 2,
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
        node.parentNode.parentNode.querySelector(".coe-select-box").value;
    let selected_branch_id = node.parentNode.parentNode.querySelector(
        ".location-select-box"
    ).value;
    
    if (type == "coe") {
        coe_id = node.value | selected_coe_id;
        
        branch_id = "";
        
    }
    if (type == "location") {
        branch_id = node.value;
        coe_id = node.parentNode.parentNode.querySelector(
            ".coe-select-box"
        ).value;
    }

    let body = { coe_id, branch_id, type };

    
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
        // <option value="">Select Centre of Excellence</option>
        node.parentNode.parentNode.querySelector(
            ".coe-select-box"
        ).innerHTML = ``;
        response.data.coes.forEach((result, index) => {
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
                    let option = `<option data-slug="${speciality.doctor_slug}"  value="${speciality.id}" ${
                        speciality.id == selected_branch_id ? `selected` : ``
                    }>${speciality.name}</option>`;

                    node.parentNode.parentNode
                        .querySelector(".speciality-select-box")
                        .insertAdjacentHTML("beforeend", option);
                });
            }
        });

        if(response.data.specialities != undefined && response.data.specialities.length > 0){
            node.parentNode.parentNode.querySelector(
                ".speciality-select-box"
            ).innerHTML = ``;
            response.data.specialities.forEach((speciality) => {
                let option = `<option data-slug="${speciality.doctor_slug}" value="${speciality.id}" ${
                    speciality.id == selected_branch_id ? `selected` : ``
                }>${speciality.name}</option>`;

                node.parentNode.parentNode
                    .querySelector(".speciality-select-box")
                    .insertAdjacentHTML("beforeend", option);
            });
        }
    }
    let speciality_id = node.parentNode.parentNode.querySelector(
        ".speciality-select-box"
    ).value;
    coe_id = node.parentNode.parentNode.querySelector(".coe-select-box").value;
    branch_id = node.parentNode.parentNode.querySelector(
        ".location-select-box"
    ).value;
    let docbody = { coe_id, branch_id, speciality_id };

    if (
        node.parentNode.parentNode.querySelector(".doctor-select-box") != null
    ) {
        node.parentNode.parentNode.querySelector(
            ".doctor-select-box"
        ).innerHTML = "";
        printDoctors(docbody, true, ".doctor-select-box");
    } else {
        $(".specialists-slider").slick("unslick");

        document.querySelector(".specialists-slider").innerHTML = "";
        printDoctors(docbody, false, ".specialists-slider");
    }
}

async function handleChange(type) {
    let printStatus = printOptions(this);

    // let coe_id =
    //     this.parentNode.parentNode.querySelector(".coe-select-box").value;
    // let branch_id = this.parentNode.parentNode.querySelector(
    //     ".location-select-box"
    // ).value;
    // let speciality_id = this.parentNode.parentNode.querySelector(
    //     ".speciality-select-box"
    // ).value;

    // if (speciality_id != "") {
    //     coe_id = "";
    // }
    // let body = { coe_id, branch_id, speciality_id };

    // if (
    //     this.parentNode.parentNode.querySelector(".doctor-select-box") != null
    // ) {
    //     this.parentNode.parentNode.querySelector(
    //         ".doctor-select-box"
    //     ).innerHTML = "";
    //     printDoctors(body, true, ".doctor-select-box");
    // } else {
    //     $(".specialists-slider").slick("unslick");

    //     document.querySelector(".specialists-slider").innerHTML = "";
    //     printDoctors(body, false, ".specialists-slider");
    // }
}

document.addEventListener("DOMContentLoaded", () => {
    if (
        document.querySelector(".coe-page") != undefined &&
        (document.querySelector(".coe-page").getAttribute("data-page-type") ==
            "Coe" ||
            document
                .querySelector(".coe-page")
                .getAttribute("data-page-type") == "speciality")
    ) {
        // $(".financial-slider").slick("unslick");
        // $(".banjara-hills-slider").slick("unslick");
        let type = document
            .querySelector(".coe-page")
            .getAttribute("data-page-type");
        let coe_id = "";
        let branch_id = 1;
        let speciality_id = "";

        if (type == "Coe") {
            coe_id = document
                .querySelector(".coe-page")
                .getAttribute("data-coe-id");
        } else if (type == "speciality") {
            speciality_id = document
                .querySelector(".coe-page")
                .getAttribute("data-coe-id");
        }
        let body = { coe_id, branch_id, speciality_id };
        printDoctors(body, false, ".banjara-hills-slider");
        branch_id = 2;
        body = { coe_id, branch_id, speciality_id };
        printDoctors(body, false, ".financial-slider");
    } else {
        let branch_id = document.getElementById("location-select-box").value;
        let coe_id = document.getElementById("coe-select-box").value;
        let speciality_id = "";
        
        // document.getElementsByClassName("location-select-box").forEach(element=>{
        //     printOptions(this);

        // })

        printOptions(document.getElementsByClassName("location-select-box")[0])
        printOptions(document.getElementsByClassName("location-select-box")[1])
        // let body = { branch_id, coe_id, speciality_id };
        $(".specialists-slider").slick("unslick");

        document.querySelector(".specialists-slider").innerHTML = "";
        // printDoctors(body, false, ".specialists-slider");
    }
});

domSelector(".coe-select-box", "change", handleChange);
domSelector(".location-select-box", "change", handleChange);
domSelector(".speciality-select-box", "change", handleChange);
