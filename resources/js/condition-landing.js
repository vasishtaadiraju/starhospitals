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
async function printConditions(url,body) {
    const response = await httpRequest(
        url,
        "POST",
        body
    );

    console.log(response);
    printLinks(response.data.links,response.data.prev_page_url,response.data.next_page_url,response.data.from,response.data.to,response.data.total);
    document
                .querySelector('.conditions-root').innerHTML = "";
    response.data.data.forEach((result) => {
            let slug = "";
           if(result.symptoms_causes_slug != null)
           {
            slug  = result.symptoms_causes_slug;
           }
           else if(result.diagnosis_treatment_slug != null)
           {
            slug  = result.symptoms_causes_slug;
           }
           

     let doctorCard = `<div class="conditions-root__cards">
     <img data-src="${import.meta.env.VITE_ASSET_URL}${result.image}" alt="">

     <div class="conditions-root__cards__details">
         <h3>${result.name}</h3>

         <p>
             ${result.short_description}
         </p>

         <a href="/condition-treatments/${slug}" class="conditions-root__cards__details__read-more">
             Read More
         </a>
     </div>
 </div>`
            document
                .querySelector('.conditions-root')
                .insertAdjacentHTML("beforeend", doctorCard);
        }
    );


 
}

async function printOptions(node)
{

    let type = node.getAttribute('data-type');
    let coe_id = node.value;
    let branch_id = "";
    let selected_coe_id = node.parentNode.parentNode.querySelector(".coe-select-box").value;
    // let selected_branch_id = node.parentNode.parentNode.querySelector(".speciality-select-box").value;
        console.log(node);

    if(type == 'coe')
    {
       coe_id = node.value;
       branch_id = "";
       
    }
    type = 'coe' ;
    let body = {coe_id,branch_id,type};
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
        node.parentNode.parentNode.querySelector(".speciality-select-box").innerHTML = `<option value="">Select Speciality</option>`
        response.data.specialities.forEach((result) => {
            let option = `<option value="${result.id}"}>${result.name}</option>`;

            node.parentNode.parentNode.querySelector(".speciality-select-box").insertAdjacentHTML("beforeend", option);

        });
    }
    
}
async function handleChange(type) {
    
    printOptions(this);
   
    let coe_id = this.parentNode.parentNode.querySelector(
        ".coe-select-box"
    ).value;
    let speciality_id = this.parentNode.parentNode.querySelector(
        ".speciality-select-box"
    ).value;
    let body = { coe_id,speciality_id};

        // $(".specialists-slider").slick("unslick");
        // printConditions('/api/getBranchCoeSpecialityById',body);
    }

    function handleSearch()
    {
        let coe_id = this.parentNode.parentNode.querySelector(
            ".coe-select-box"
        ).value;
        let speciality_id = this.parentNode.parentNode.querySelector(
            ".speciality-select-box"
        ).value;
        let body = { coe_id,speciality_id};
        printConditions('/api/getConditionsByCOESpeciality',body);

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
        printConditions(this.getAttribute('href'),body);
}



document.addEventListener("DOMContentLoaded", () => {

  
    let coe_id = document.querySelector(
        ".coe-select-box"
    ).value;
    let speciality_id = document.querySelector(
        ".speciality-select-box"
    ).value;
    let body = { coe_id,speciality_id};
    printConditions('/api/getConditionsByCOESpeciality',body);
});

// domSelector(".speciality-select-box", "change", handleChange);
domSelector(".coe-select-box", "change", handleChange);


domSelector(".pagination__buttons a",'click',handlePageClicks);
domSelector(".conditions-search",'click',handleSearch);
