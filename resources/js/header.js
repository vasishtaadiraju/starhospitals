const navBtn = document.getElementById('nav-toggle');
const navBar = document.getElementById('star-navbar');

navBtn.addEventListener('click',()=>{
    navBtn.classList.toggle('mobile-hamburger--open')
    navBar.classList.toggle('header__nav--active');
})

$(window).scroll(function() {
    if(screen.width > 1024)
    {
        if ($(this).scrollTop() > 1){  
            $('.header__main').addClass("header__main--fixed");
            // $('.header__nav').addClass("header__nav--fixed");
            $('.header__nav--fixed').css('display','flex');
            $('.header__main--fixed--hide').css('display','none');
          }
          else{
            $('.header__main').removeClass("header__main--fixed");
            $('.header__nav--fixed').css('display','none');
            $('.header__main--fixed--hide').css('display','flex');
    
    
          }
    }
    
    });


  //   document.querySelector('.patient-enquiry').addEventListener('click',function(){
  //     // let src = this.getAttribute('data-video-link')
  //     const formHtml = `<div class="p-enq">
  //     <span class="p-enq__close">X</span>
  //     <div class="p-enq__wrapper">
  //         <h2>Please Fill in Your Details</h2>
  //         <form action="/request-callback" method="post">
              
  //             <div class="form-fields">
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-1">
  //                     <div class="form-fields-wrapper ">
  //                         <input placeholder="Name" type="text"
  //                             class=""
  //                             name="name">
                          
  //                     </div>
  //                 </div>
  
  //             </div>
  //             <div class="form-fields">
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-1">
  //                     <div class="form-fields-wrapper ">
  //                         <input placeholder="Email"
  //                             type="text"class=""
  //                             name="email">
                         
  //                     </div>
  //                 </div>
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-1">
  //                     <div class="form-fields-wrapper ">
  //                         <input placeholder="Phone Number"
  //                             type="text"class=""
  //                             name="contact">
                         
  //                     </div>
  //                 </div>
  //             </div>
  //             <div class="form-fields">
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-2">
  //                     <div class="form-fields-wrapper ">
                          
  //                     <input placeholder="Speciality" 
  //                     type="text"class=""
  //                     name="text" >
  //                     </div>
  //                 </div>
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-2">
  //                     <div class="form-fields-wrapper ">
  //                         <input
  //                             type="text"class=""
  //                             name="date" placeholder="Branch">
                          
  //                     </div>
  //                 </div>
  //             </div>
  //             <div class="form-fields">
  //                 <div class="form-fields-wrapper form-fields-wrapper--col-1">
  //                     <div class="form-fields-wrapper ">
                          
  //                     <input placeholder="Doctor Name" 
  //                     type="text"class=""
  //                     name="text" >
  //                     </div>
  //                 </div>
                  
  //             </div>
  //             <button class="form-submit-button" >Submit</button>
  //         </form>
  //     </div>
  // </div>
  //     `
      
  //     document.querySelector('body').insertAdjacentHTML('afterbegin',formHtml);
  //     document.querySelector('.p-enq__close').addEventListener('click',function(){
  //         this.parentNode.remove();
  //     })
  //     document.querySelector('.p-enq').addEventListener('click',function(){
  //         this.remove();
  //     })
  //   })

