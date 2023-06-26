import './utils/event-handler';
// const  coes = document.querySelectorAll('.coes__list__item');
import { removeClass } from './utils/event-handler';



var myFunction = 
domSelector('.faqs__card','click',function() {
        // removeClass('faqs__card','faqs__card--active');
        removeClass('faqs__card__answer','faqs__card__answer--active');
        this.childNodes[3].classList.toggle("faqs__card__answer--active");
        this.classList.toggle("faqs__card--active");
});


