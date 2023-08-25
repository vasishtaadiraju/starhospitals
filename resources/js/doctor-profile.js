import './utils/event-handler';
import "./app";
import { removeClass, showForm } from './utils/event-handler';
domSelector('.d-p-achievement__tab','click',function(){
    const activeStatus = this.nextElementSibling.classList.contains('d-p-achievement__details--active');
    removeClass('d-p-achievement__details','d-p-achievement__details--active')
    removeClass('d-p-achievement__tab','d-p-achievement__tab--active')
    if(activeStatus == false){
        this.nextElementSibling.classList.toggle('d-p-achievement__details--active')
        this.classList.add('d-p-achievement__tab--active');
}
    


    
})


domSelector('.d-p-info__col-3__scroll-tabs__item a','click',function(e){
    e.preventDefault()
    let element = document.querySelector(this.getAttribute('href'));
    let tabClass = this.getAttribute('data-tab');
    const activeStatus = element.classList.contains('d-p-achievement__details--active');
    removeClass('d-p-info__col-3__scroll-tabs__item','d-p-info__col-3__scroll-tabs__item--active')
    removeClass('d-p-achievement__tab','d-p-achievement__tab--active')

    this.parentNode.classList.add('d-p-info__col-3__scroll-tabs__item--active');
    removeClass('d-p-achievement__details','d-p-achievement__details--active')
    if(activeStatus == false)
    {
        element.classList.toggle('d-p-achievement__details--active')
        console.log(element.previousElementSibling);
        element.previousElementSibling.classList.add('d-p-achievement__tab--active');
    }
    

    element.scrollIntoView(false);
})   


domSelector('#change-location-box','change',function(e){
   
    window.location.href = e.target.options[e.target.selectedIndex].getAttribute('data-url');
})

domSelector(".doctor-physical-btn", "click", showForm);
