window.domSelector = function (selector, event, fn) {
    Array.from(document.querySelectorAll(selector)).forEach(function (element) {
        element.addEventListener(event, fn);
    });


};

export function removeClass(elementClass, removeClass) {
  const elements = document.getElementsByClassName(elementClass);
  Array.from(elements).forEach((element) => {
      element.classList.remove(removeClass);
  });
}



export async function handleFormSubmit(e)
{
    e.preventDefault();
    console.log(e.target.getAttribute('action'));
    let formData = {};
    Array.from(e.target).forEach(input=>{
        // formData.append(input.name,input.value);
        formData[input.name] = input.value;
    })

    let response = await httpRequest(e.target.getAttribute('action'),'POST',formData);
    console.log(response);

    if(response.status.status == 422)
    {
        Array.from(e.target).forEach(input=>{
            // formData.append(input.name,input.value);
            
            console.log();
            if(response.data.message[input.name] != undefined)
            {
                 
                console.log(response.data.message[input.name][0]);
                input.nextElementSibling.innerHTML = response.data.message[input.name][0]
                // response.data.message[input.name][0]
            }
        })
    }
    if(response.status.status == 200)
    {
        return response;
    }
}


export function showForm()
{
    let speciality = this.getAttribute('data-speciality');
    let branch = this.getAttribute('data-branch');
    let name = this.getAttribute('data-name');
    let href = this.getAttribute('data-href');
    const formHtml = `<div class="p-enq">
        <span class="p-enq__close">X</span>
        <div class="p-enq__wrapper">
            <h2>Please Fill in Your Details</h2>
            <form class="patient-enquiry-form" action="/api/patient" method="post">
                
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Name" type="text"
                                class=""
                                name="name">
                        <span class="error-message"> </span/>

                            
                        </div>
                    </div>
    
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Email"
                                type="text"class=""
                                name="email">
                        <span class="error-message"> </span/>

                           
                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            <input placeholder="Phone Number"
                                type="text"class=""
                                name="contact">
                        <span class="error-message"> </span/>

                           
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            
                        <input placeholder="Speciality" 
                        type="text"class=""
                        name="speciality" value="${speciality}" disabled>
                        <span class="error-message"> </span/>

                        </div>
                    </div>
                    <div class="form-fields-wrapper form-fields-wrapper--col-2">
                        <div class="form-fields-wrapper ">
                            <input
                                type="text"class=""
                                name="branch" value="${branch}" placeholder="Branch" disabled>
                        <span class="error-message"> </span/>
                            
                        </div>
                    </div>
                </div>
                <div class="form-fields">
                    <div class="form-fields-wrapper form-fields-wrapper--col-1">
                        <div class="form-fields-wrapper ">
                            
                        <input placeholder="Doctor Name" 
                        type="text"class=""
                        name="doctor" value="${name}" disabled>
                        </div>
                        <span class="error-message"> </span/>
                    </div>
                    
                </div>
                <input type="hidden" value="${href}" name="href"/>
                <button class="form-submit-button" >Submit</button>
            </form>
        </div>
    </div>
        `
        
        document.querySelector('body').insertAdjacentHTML('afterbegin',formHtml);
        document.querySelector('.p-enq__close').addEventListener('click',async function(){
            this.parentNode.remove();
        })
        // document.querySelector('.p-enq').addEventListener('click',function(){
        //     this.remove();
        // })

        document.querySelector('.patient-enquiry-form').addEventListener('submit',async function(e){
            let formResponse = await handleFormSubmit(e);

            console.log(formResponse);
            if(formResponse.status.status == 200)
            {
                window.open(formResponse.data.href,'_blank');
            }
        });
}


function handleAjaxError(data,status) {
    return  {
        data :data,
        status:status
      }
}
 async function handleAjaxSuccess(data,status) {
    return  {
      data :data,
      status:status
    }
}

export async function httpRequest(url ,method, body, headers) {
    let response;
    let data = {};
    if (method == "POST") {
        data = {
            method: method,
            body: JSON.stringify(body),
            // {
            //     title: "test-tile",
            //     body: "test-body",
            // }

            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        };
        if (method == "GET") {
            data = { method: method };
        }
    }
    response = await fetch(url, data);
  return  response.status != 200
        ? handleAjaxError(await response.json(),response)
        : handleAjaxSuccess(await response.json(),response);
}

;

// console.log(httpRequest("POST"));



export const debounce = (func, delay) => {
  let debounceTimer
  return function() {
      const context = this
      const args = arguments
          clearTimeout(debounceTimer)
              debounceTimer
          = setTimeout(() => func.apply(context, args), delay)
  }
}