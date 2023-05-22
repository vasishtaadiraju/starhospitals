import './utils/event-handler';
// const  coes = document.querySelectorAll('.coes__list__item');




var myFunction = 
domSelector('.coes__list__item','click',function() {
    
        this.childNodes[3].classList.toggle("coes__description__wrapper--mobile--active");
});
