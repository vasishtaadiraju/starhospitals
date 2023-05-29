const navBtn = document.getElementById('nav-toggle');
const navBar = document.getElementById('star-navbar');

navBtn.addEventListener('click',()=>{
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