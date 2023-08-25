import './utils/event-handler';
// const  coes = document.querySelectorAll('.coes__list__item');
import { removeClass } from './utils/event-handler';



var myFunction = 
domSelector('.faqs__card','click',function() {
       
        let activeStatus = this.childNodes[3].classList.contains('faqs__card__answer--active');
        removeClass('faqs__card__answer','faqs__card__answer--active');
        removeClass('faqs__card','faqs__card--active')
        if(activeStatus == false)
        {
                this.childNodes[3].classList.add("faqs__card__answer--active");
                this.classList.toggle("faqs__card--active");

        }
        

});


