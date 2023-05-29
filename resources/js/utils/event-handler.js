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





function handleAjaxError(response) {
  return  response;
}
 async function handleAjaxSuccess(data,status) {
    return  {
      data :data,
      status:status
    }
}

export async function httpRequest(url ,type, body, headers) {
    let response;
    let data = {};
    if (type == "POST") {
        data = {
            method: type,
            body: JSON.stringify(body),
            // {
            //     title: "test-tile",
            //     body: "test-body",
            // }

            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        };
        if (type == "GET") {
            data = { method: type };
        }
    }
    response = await fetch(url, data);
  return  response.status != 200
        ? handleAjaxError(response)
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