const navBtn = document.getElementById('nav-toggle');
const navBar = document.getElementById('star-navbar');

navBtn.addEventListener('click',()=>{
    navBar.classList.toggle('header__nav--active');
})