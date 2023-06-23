import './utils/event-handler';

domSelector('.footer__columns__option__label','click',function() {
    this.childNodes[1].classList.toggle("footer__columns__option__label--dropdown__option--active");
    if(this.getAttribute('data-speciality') == 'second-speciality')
    {
        document.getElementById('second-speciality').childNodes[1].classList.toggle("footer__columns__option__label--dropdown__option--active");
    }
})


document.querySelector('.scroll-top-top').addEventListener('click',function(){
    window.scrollTo(0,0)
})