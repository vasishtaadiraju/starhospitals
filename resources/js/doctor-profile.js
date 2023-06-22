import './utils/event-handler';
import "./app";
import { removeClass, showForm } from './utils/event-handler';
domSelector('.d-p-achievement__tab','click',function(){
    this.nextElementSibling.classList.toggle('d-p-achievement__details--active')

    console.log(this.nextElementSibling);
})


domSelector('.d-p-info__col-3__scroll-tabs__item a','click',function(e){
    e.preventDefault()
    let element = document.querySelector(this.getAttribute('href'));
    removeClass('d-p-info__col-3__scroll-tabs__item','d-p-info__col-3__scroll-tabs__item--active')
    this.parentNode.classList.add('d-p-info__col-3__scroll-tabs__item--active');
    element.scrollIntoView(false);
})   


domSelector('#change-location-box','change',function(e){
    console.log();
    window.location.href = e.target.options[e.target.selectedIndex].getAttribute('data-url');
})

domSelector(".doctor-physical-btn", "click", showForm);
