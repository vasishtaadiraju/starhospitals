import './utils/event-handler';
import { removeClass } from './utils/event-handler';

domSelector('.footer__columns__option__label','click',function() {
    const activeStatus = this.childNodes[1].classList.contains('footer__columns__option__label--dropdown__option--active')
    removeClass('footer__columns__option__label--dropdown__option','footer__columns__option__label--dropdown__option--active')
    removeClass('footer__columns__option__label--dropdown','footer__columns__option__label--dropdown--active')
    if(activeStatus == false)
    {
        this.childNodes[1].classList.toggle("footer__columns__option__label--dropdown__option--active");
        this.classList.toggle('footer__columns__option__label--dropdown--active')
        if(this.getAttribute('data-speciality') == 'second-speciality')
    {
        document.getElementById('second-speciality').childNodes[1].classList.toggle("footer__columns__option__label--dropdown__option--active");
    }

    }
    
})


document.querySelector('.scroll-top-top').addEventListener('click',function(){
    window.scrollTo(0,0)
})