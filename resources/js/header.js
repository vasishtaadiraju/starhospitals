import { removeClass } from "./utils/event-handler";

const navBtn = document.getElementById("nav-toggle");
const navBar = document.getElementById("star-navbar");

navBtn.addEventListener("click", () => {
    navBtn.classList.toggle("mobile-hamburger--open");
    navBar.classList.toggle("header__nav--active");
});
window.localStorage.clear()
$(window).scroll(function () {
    if (screen.width > 1024) {
        if ($(this).scrollTop() > 1) {
            $(".header__main").addClass("header__main--fixed");
            // $('.header__nav').addClass("header__nav--fixed");
            $(".header__nav--fixed").css("display", "flex");
            $(".header__main--fixed--hide").css("display", "none");
            $(".scroll-top-top").css("display", "flex");
        } else {
            $(".header__main").removeClass("header__main--fixed");
            $(".header__nav--fixed").css("display", "none");
            $(".header__main--fixed--hide").css("display", "flex");
            $(".scroll-top-top").css("display", "none");
        }
    }

    if ($(this).scrollTop() > 1) {
        $(".scroll-top-top").css("display", "flex");
    } else {
        $(".scroll-top-top").css("display", "none");
    }
});


// document.querySelector('#scroll-fixed-dropdown').addEventListener('click'.at)

// $('.scrollable-dropdown-btn').on('click',function (e){
    
//     // e.preventDefault()
//     if(e.target !== e.currentTarget) return;
//     console.log($('#'+$(this).attr('data-item')));
//     $('#'+$(this).attr('data-item')).toggleClass('scrollable-dropdown__options-container--active');
//     $('.child-option').hide();
// })


$('.scrollable-dropdown__parent-option').on('mouseover',function(){
    
    $('.child-option').hide();
    let className = $(this).attr('data-class');
    $(this).parent().parent().find('.'+className).show();
    
})
$('.scrollable-dropdown').on('mouseleave',function(){
    
    $('.child-option').hide();
    // let className = $(this).attr('data-class');
    // $(this).parent().parent().find('.'+className).show();
    
})

// $(document).on('mouseover', 'div', function(e) {
//     console.log($(e.target).attr('class'));
//     // $('.child-option').hide();
// });

// document.querySelector('body').addEventListener('click',function(e){
//     // document.querySelector('.header__nav__option--dropdown')
//     console.log(e.target.parentElement.classList.contains('header__nav__option--dropdown'));
//     if(e.target.parentElement.classList.contains('header__nav__option--dropdown')){
//         return;
//     }
//     removeClass('header__nav__option--dropdown','header__nav__option--dropdown--active')
// })
// domSelector('.header__nav__option--nested-dropdown','click',function(e) {
//     // removeClass('dropdown-items','nav-active');
//     // console.log(this.parentNode);
//     // console.log(e.target.parentNode);
//     console.log(e.target.nodeName);
//     if(e.target.nodeName == 'LI')
//     {
//         return;
//     }
//     else if (e.target.nodeName == 'A')
//     {
//         console.log(e.target.parentNode);
//         console.log(e.target.parentNode.classList.contains('header__nav__option--nested-dropdown'))

//         if(e.target.parentNode.classList.contains('header__nav__option--nested-dropdown') && !e.target.parentNode.classList.contains('header__nav__option--nested-dropdown--active'))
//         {
//             removeClass('header__nav__option--nested-dropdown','header__nav__option--nested-dropdown--active');
//             e.target.parentNode.classList.toggle('header__nav__option--nested-dropdown--active')
//         }
//         else if(e.target.parentNode.classList.contains('header__nav__option--nested-dropdown--active'))
//         {
//             removeClass('header__nav__option--nested-dropdown','header__nav__option--nested-dropdown--active');

//         }
//         // else if(parentNode == false){
//         //     e.target.parentNode.classList.toggle('header__nav__option--nested-dropdown--active')
//         //     parentNode = true;
//         // }
//     }

//     // if(this.querySelector('ul').classList.contains('nav-active') && open == true)
//     // {
//     //     // this.querySelector('ul').classList.remove('nav-active');
//         // this.classList.toggle('header__nav__option--dropdown--active')

//     //     // this.querySelector('ul').style.display = 'none';
//     // }

// })

// $(window).scroll(function () {
    if (screen.width < 1024) {

        domSelector('.header__nav__option--dropdown','click',function(e) {
            console.log();

            // console.log(e.target.parentNode.getAttribute('data-item'));
            // if(e.target.parentNode.getAttribute('data-item') != null)
            // {
                
            //     return;
            // }    
            // $('#fixed-dropdown').removeClass('scrollable-dropdown__options-container--active');
            // $('#scrollable-main-dropdown').removeClass('scrollable-dropdown__options-container--active');
            if(e.target.nodeName == 'LI')
            {
                return;
            }
           
            else if (e.target.nodeName == 'A')
            {
                if(e.target.parentNode.classList.contains('header__nav__option--dropdown') && !e.target.parentNode.classList.contains('header__nav__option--dropdown--active'))
                {
                    removeClass('header__nav__option--dropdown','header__nav__option--dropdown--active');
                    e.target.parentNode.classList.toggle('header__nav__option--dropdown--active')
                }
                else if(e.target.parentNode.classList.contains('header__nav__option--dropdown--active'))
                {
                    removeClass('header__nav__option--dropdown','header__nav__option--dropdown--active');
        
                }
            }
        
        })

    }

// })



console.log();



// Array.from(document.querySelectorAll('.coe-icons')[0].querySelectorAll('svg')).forEach((element) => {
//     element.setAttribute('fill','currentColor')

   

//     Array.from(element.querySelectorAll('path')).forEach((path) => {
//         path.setAttribute('fill','currentColor')
//     });
//     console.log(element.getAttribute('fill'));
// });
// Array.from(document.querySelectorAll('.coe-icons')[1].querySelectorAll('svg')).forEach((element) => {
//     element.setAttribute('fill','currentColor')

   

//     Array.from(element.querySelectorAll('path')).forEach((path) => {
//         path.setAttribute('fill','currentColor')
//     });
//     console.log(element.getAttribute('fill'));
// });

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
