 window.domSelector = function (selector,event,fn)
 {
    Array.from(document.querySelectorAll(selector)).forEach(function(element) {
        element.addEventListener(event,fn);
      });
 }



async function httpRequest(type,body,headers)
{
    let response ;

        response = await fetch('https://api.publicapis.org/etnries',{
        method: type,
        body: JSON.stringify(body),
        // {
        //     title: "test-tile",
        //     body: "test-body",
        // }
        
        headers: headers
        
        
        // {
        //     "Content-type": "application/json; charset=UTF-8"
        // }
    });

        let data = {
            'statusCode':response.status,
            'statusText':response.statusText,
            // 'data':await response.json(),
            'error':"",
            'header':response.headers
        }
        console.log(data);
    // console.log(response);
   
}

httpRequest('GET',{});