import "./utils/event-handler";
import { httpRequest } from "./utils/event-handler";

import BushraUrl from "../images/doctors/doctor.png";



function printLinks(links,previousLink,nextLink,from,to,total)
{
console.log(links);
document.querySelector('.pagination__pages').innerHTML = "";
if(previousLink == null)
{
    previousLink = '#';
}
if(nextLink == null)
{
    nextLink = '#';
}
document.querySelector('.pagination__buttons__button-prv').setAttribute('href',previousLink);

document.querySelector('.pagination__buttons__button-next').setAttribute('href',nextLink);
document.querySelector('#from').innerHTML = from;
document.querySelector('#to').innerHTML = to;
document.querySelector('#total').innerHTML = total;
links.forEach((link,index)=>{
            if(index != 0 && index != links.length -1)
            {
                let linkHtml = `<li><a class="pagination__pages__link ${link.active ? `pagination__pages__link--active` : '' }"  href="${link.url}">${link.label}</a></li>`
                document.querySelector('.pagination__pages').insertAdjacentHTML("beforeend", linkHtml);
            }
        domSelector(".pagination__pages li a",'click',handlePageClicks);


})
}
async function printDoctors(url,body) {
    const response = await httpRequest(
        url,
        "POST",
        body
    );

    console.log(response);
    printLinks(response.data.links,response.data.prev_page_url,response.data.next_page_url,response.data.from,response.data.to,response.data.total);
    document
                .querySelector('.doctor-appointment-cards-wrapper').innerHTML = "";
    response.data.data.forEach((result) => {
        
            let coeName = [];
            let branchName = [];

            result.coes.forEach((coe) => {
                coeName.push(`<a href="#"> ${coe.name}</a>`);
            });
            result.branches.forEach((branch) => {
                branchName.push(`<a href="#"> ${branch.name}</a>`);
            });
            // 
           

     let doctorCard = `<div class="doctors-card">
     <a href="" class="doctors-card__lt">
         <img src="${import.meta.env.VITE_ASSET_URL}${result.large_image}" alt="">
         <div class="doctors-card__lt__details">
             <p>${result.experience} yrs <span>Experience</span></p>
             <p>Rs. 500 <span>Fees</span> </p>
         </div>
     </a>
     <div class="doctors-card__rt">
         <h2><a href="">${result.name}</a></h2>
         <p class="doctors-card__rt__designation"><a href=""> ${result.designation} </a></p>
         <p class="doctors-card__rt__speciality"><a href="">${coeName.toString()}</a></p>
         <p class="doctors-card__rt__location"> <a href="">${branchName.toString()}</a></p>

         <div class="doctors-card__rt__btn">
         <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M7.14702 0V2H13.2446V0H15.2771V2H19.3421C19.9034 2 20.3584 2.44772 20.3584 3V19C20.3584 19.5523 19.9034 20 19.3421 20H1.04946C0.488203 20 0.0332031 19.5523 0.0332031 19V3C0.0332031 2.44772 0.488203 2 1.04946 2H5.1145V0H7.14702ZM18.3259 10H2.06572V18H18.3259V10ZM6.13076 12V14H4.09824V12H6.13076ZM11.2121 12V14H9.17954V12H11.2121ZM16.2934 12V14H14.2608V12H16.2934ZM5.1145 4H2.06572V8H18.3259V4H15.2771V6H13.2446V4H7.14702V6H5.1145V4Z" fill="#E3000F"/>
         </svg>
             <span>View Full Profile</span>
         </div>
         <div class="doctors-card__rt__btn">
         <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M7.14702 0V2H13.2446V0H15.2771V2H19.3421C19.9034 2 20.3584 2.44772 20.3584 3V19C20.3584 19.5523 19.9034 20 19.3421 20H1.04946C0.488203 20 0.0332031 19.5523 0.0332031 19V3C0.0332031 2.44772 0.488203 2 1.04946 2H5.1145V0H7.14702ZM18.3259 10H2.06572V18H18.3259V10ZM6.13076 12V14H4.09824V12H6.13076ZM11.2121 12V14H9.17954V12H11.2121ZM16.2934 12V14H14.2608V12H16.2934ZM5.1145 4H2.06572V8H18.3259V4H15.2771V6H13.2446V4H7.14702V6H5.1145V4Z" fill="#E3000F"/>
         </svg>
             <span>Book an Appointment</span>
         </div>
     </div>
 </div>`
            document
                .querySelector('.doctor-appointment-cards-wrapper')
                .insertAdjacentHTML("beforeend", doctorCard);
        }
    );


 
}


async function handleChange(type) {
    
    
   
    let coe_id = this.parentNode.parentNode.querySelector(
        ".speciality-select-box"
    ).value;
    let branch_id = this.parentNode.parentNode.querySelector(
        ".location-select-box"
    ).value;
    let paginate = true;
    let speciality_id = "";
    let body = { coe_id, branch_id, speciality_id,paginate};

        $(".specialists-slider").slick("unslick");
        printDoctors('/api/getDoctorByBranchCoeSpeciality',body);
    }

function handlePageClicks(e)
{
    e.preventDefault();
    console.log(this.getAttribute('href'));
    let coe_id = document.querySelector(
        ".speciality-select-box"
    ).value;
    let branch_id = document.querySelector(
        ".location-select-box"
    ).value;
    let paginate = true;
    let speciality_id = "";
    let body = { coe_id, branch_id, speciality_id,paginate};

        // $(".specialists-slider").slick("unslick");
        printDoctors(this.getAttribute('href'),body);
}



document.addEventListener("DOMContentLoaded", () => {

  
    let coe_id = document.querySelector(
        ".speciality-select-box"
    ).value;
    let branch_id = document.querySelector(
        ".location-select-box"
    ).value;
    let paginate = true;
    let speciality_id = "";
    let body = { coe_id, branch_id, speciality_id,paginate};
        printDoctors('/api/getDoctorByBranchCoeSpeciality',body);
    
    
});

domSelector(".speciality-select-box", "change", handleChange);
domSelector(".location-select-box", "change", handleChange);


domSelector(".pagination__buttons a",'click',handlePageClicks);
