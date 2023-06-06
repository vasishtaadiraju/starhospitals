import "./utils/event-handler";
import { httpRequest } from "./utils/event-handler";

import BushraUrl from "../images/doctors/doctor.png";

async function printDoctors(body, selectBox, className) {
    const response = await httpRequest(
        "/api/getDoctorByBranchCoeSpeciality",
        "POST",
        body
    );
    response.data.forEach((result) => {
        if (selectBox == true) {
            let doctorOption = `<option value="">${result.name}</option>`
            document
                .querySelector(className)
                .insertAdjacentHTML("beforeend", doctorOption);
        } else {
            let coeName = [];
            let branchName = [];

            result.coes.forEach((coe) => {
                coeName.push(`<a href="#"> ${coe.name}</a>`);
            });
            result.branches.forEach((branch) => {
                branchName.push(`<a href="#"> ${branch.name}</a>`);
            });
            // 
            let doctorCard = `<div class="doctors-card doctors-card--primary">
        <a href=""><img class="doctors-card--primary__doctor-img" style="width:100%" src="${import.meta.env.VITE_ASSET_URL}${result.large_image}" alt="" /></a> 
 
         <div class="doctors-card--primary__content">
         <div class="doctors-card--primary__info">
             <h4><a href="">${result.name}</a></h4>
           
             <p class="doctors-card--primary__speciality">${coeName.toString()} </p>
             <p class="doctors-card--primary__location">${branchName.toString()}</p>
     </div>
             <div class="doctors-card--primary__button-wrapper" >
             <div class="doctors-card__rt__btn">
                
                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.14702 0V2H13.2446V0H15.2771V2H19.3421C19.9034 2 20.3584 2.44772 20.3584 3V19C20.3584 19.5523 19.9034 20 19.3421 20H1.04946C0.488203 20 0.0332031 19.5523 0.0332031 19V3C0.0332031 2.44772 0.488203 2 1.04946 2H5.1145V0H7.14702ZM18.3259 10H2.06572V18H18.3259V10ZM6.13076 12V14H4.09824V12H6.13076ZM11.2121 12V14H9.17954V12H11.2121ZM16.2934 12V14H14.2608V12H16.2934ZM5.1145 4H2.06572V8H18.3259V4H15.2771V6H13.2446V4H7.14702V6H5.1145V4Z" fill="#E3000F"/>
</svg>

                 <span>Book a Physical Consultation</span>
             </div>
             <div class="doctors-card__rt__btn">
               
                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.2283 7.25L15.2771 5V11L12.2283 8.75V11H5.1145V5H12.2283V7.25ZM3.85721 14H18.3259V2H2.06572V15.3851L3.85721 14ZM4.56018 16L0.0332031 19.5V1C0.0332031 0.44772 0.488203 0 1.04946 0H19.3421C19.9034 0 20.3584 0.44772 20.3584 1V15C20.3584 15.5523 19.9034 16 19.3421 16H4.56018Z" fill="#E3000F"/>
</svg>

                 <span>Book a Video Consultation</span>
             </div>
             </div/>
         </div>
         
     </div>`;
            document
                .querySelector(className)
                .insertAdjacentHTML("beforeend", doctorCard);
        }
    });

    // $('.specialists-slider').slick('refresh')
    if(selectBox != true)
    {
    $(className).slick({
        // dots:true,
        arrows: true,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 1275,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3
            }
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

async function printOptions(node)
{

    let type = node.getAttribute('data-type');
    let coe_id = "";
    let branch_id = "";
    let selected_coe_id = node.parentNode.parentNode.querySelector(".speciality-select-box").value;
    let selected_branch_id = node.parentNode.parentNode.querySelector(".location-select-box").value;
        console.log(node);

    if(type == 'coe')
    {
       coe_id = node.value;
       console.log(coe_id);
       branch_id = "";
       console.log(type);
       
    }
    if (type == 'location')
    {
        branch_id = node.value;
        coe_id = "";
    }

    let body = {coe_id,branch_id};
    console.log(body);
    // let type = node.parentNode.parentNode.querySelector(".speciality-select-box").getAttribute('data-');
    const response = await httpRequest(
        "/api/getBranchCoeSpecialityById",
        "POST",
        body
    );

    console.log(response);

    if(type == "coe")
    {
        node.parentNode.parentNode.querySelector(".location-select-box").innerHTML = ""
        response.data.branches.forEach((result) => {
            let option = `<option value="${result.id}" ${result.id == selected_branch_id ? `selected` : ``}>${result.name}</option>`;

            node.parentNode.parentNode.querySelector(".location-select-box").insertAdjacentHTML("beforeend", option);

        });
    }
    if(type == 'location')
    {
        node.parentNode.parentNode.querySelector(".speciality-select-box").innerHTML = ""
        response.data.coes.forEach((result) => {
            let option = `<option value="${result.id}" ${result.id == selected_coe_id ? `selected` : ``}>${result.name}</option>`;

            node.parentNode.parentNode.querySelector(".speciality-select-box").insertAdjacentHTML("beforeend", option);

        });
    }
}

async function handleChange(type) {
    printOptions(this);

        let coe_id = this.parentNode.parentNode.querySelector(
            ".speciality-select-box"
        ).value;
        let branch_id = this.parentNode.parentNode.querySelector(
            ".location-select-box"
        ).value;
        let speciality_id = "";
        let body = { coe_id, branch_id, speciality_id };

        if (this.parentNode.parentNode.querySelector(".doctor-select-box") != null) {
            this.parentNode.parentNode.querySelector(".doctor-select-box").innerHTML = "";
            printDoctors(body,true,'.doctor-select-box');
        } else {
            $(".specialists-slider").slick("unslick");
    
            document.querySelector(".specialists-slider").innerHTML = "";
            printDoctors(body, false,'.specialists-slider');
        }
    
    
}

document.addEventListener("DOMContentLoaded", () => {

    if(document.querySelector(".coe-page") != undefined && document.querySelector(".coe-page").getAttribute('data-page-type') == 'Coe')
    {
        // $(".financial-slider").slick("unslick");
        // $(".banjara-hills-slider").slick("unslick");

        let coe_id = document.querySelector(".coe-page").getAttribute('data-coe-id');
        let branch_id = 1;
        let speciality_id = "";
        let body = { coe_id, branch_id, speciality_id }; 
        printDoctors(body, false,'.banjara-hills-slider');
        branch_id = 2;
        body = { coe_id, branch_id, speciality_id }; 
        printDoctors(body, false,'.financial-slider');

    }
    else
    {
        let branch_id = document.getElementById("location-select-box").value;
    let coe_id = document.getElementById("speciality-select-box").value;
    let speciality_id = "";
    let body = { branch_id, coe_id, speciality_id };
    $(".specialists-slider").slick("unslick");

    document.querySelector(".specialists-slider").innerHTML = "";
    printDoctors(body,false,'.specialists-slider');
    }
    
});

domSelector(".speciality-select-box", "change", handleChange);
domSelector(".location-select-box", "change", handleChange);
