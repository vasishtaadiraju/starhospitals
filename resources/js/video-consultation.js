import "./utils/event-handler";
import { httpRequest } from "./utils/event-handler";
import './app';

async function handleBranchChange(){

    
    let branch_id = this.options[this.options.selectedIndex].getAttribute('data-id');
    let coe_id = "";
    let type = 'location'

        let body = {branch_id,coe_id,type}
    const response = await httpRequest(
        "/api/getBranchCoeSpecialityById",
        "POST",
        body
    );
    document.querySelector(".coe-select-box").innerHTML = `<option value="">Centres of Excellence</option>`
    
    response.data.coes.forEach((result,index )=>{
        let option = "";
        option = `<option data-type="coe" data-id="${result.id}" value="${result.name}">${result.name}</option>`;

        document.querySelector(".coe-select-box")
        .insertAdjacentHTML("beforeend", option);
        
    })

}


async function handleCoeChange(){

    let branch_id = document.querySelector(".location-select-box").options[document.querySelector(".location-select-box").options.selectedIndex].getAttribute('data-id');
    let coe_id = this.options[this.options.selectedIndex].getAttribute('data-id');
    let type = 'coe'

        let body = {branch_id,coe_id,type}
    const response = await httpRequest(
        "/api/getBranchCoeSpecialityById",
        "POST",
        body
    );
    document.querySelector(".speciality-select-box").innerHTML = `<option value="">Speciality</option>`
    
    
    response.data.specialities.forEach((result,index )=>{
        let option = "";
        option = `<option data-type="coe" data-id="${result.id}" value="${result.name}">${result.name}</option>`;

        document.querySelector(".speciality-select-box")
        .insertAdjacentHTML("beforeend", option);
        
    })

    if(response.data.specialities.length == 0)
    {
        let body = {branch_id,coe_id,type}
        const response = await httpRequest(
            "/api/getDoctorByBranchCoeSpeciality",
            "POST",
            body
        );
        response.data.forEach(result=>{
        

                    if(result.doctor.video_consultation == 'yes')
                    {
            
                        
                            let option = `<option  value="${result.doctor.name}">${result.doctor.name}</option>`;
            
                            document.querySelector(".doctor-select-box")
                            .insertAdjacentHTML("beforeend", option);
                        
                        
                    }
                    
                })

    }

}


async function handleSpecialityChange(e){

    let branch_id = document.querySelector(".location-select-box").options[document.querySelector(".location-select-box").options.selectedIndex].getAttribute('data-id');

    let coe_id = " ";
    let speciality_id = this.options[this.options.selectedIndex].getAttribute('data-id');
        
    

        let body = {branch_id,coe_id,speciality_id}
    const response = await httpRequest(
        "/api/getDoctorByBranchCoeSpeciality",
        "POST",
        body
    );
    document.querySelector(".doctor-select-box").innerHTML = `<option value="">Doctor</option>`
    
    response.data.forEach(result=>{
        

        if(result.doctor.video_consultation == 'yes')
        {

            
                let option = `<option value="${result.doctor.id}">${result.doctor.name}</option>`;

                document.querySelector(".doctor-select-box")
                .insertAdjacentHTML("beforeend", option);
            
            
        }
        
    })

}

domSelector(".coe-select-box", "change", handleCoeChange);
domSelector(".location-select-box", "change", handleBranchChange);
domSelector(".speciality-select-box", "change", handleSpecialityChange);