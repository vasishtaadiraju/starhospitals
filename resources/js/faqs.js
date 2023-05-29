import './utils/event-handler';
// const  coes = document.querySelectorAll('.coes__list__item');




var myFunction = 
domSelector('.faqs__card','click',function() {
        console.log(this.childNodes);
        this.childNodes[3].classList.toggle("faqs__card__answer--active");
});
