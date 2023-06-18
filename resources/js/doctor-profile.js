import './utils/event-handler';

domSelector('.d-p-achievement__tab','click',function(){
    this.nextElementSibling.classList.toggle('d-p-achievement__details--active')

    console.log(this.nextElementSibling);
})


domSelector('.d-p-info__col-3__scroll-tabs__item a','click',function(e){
    e.preventDefault()
    let element = document.querySelector(this.getAttribute('href'));
    element.classList.add('d-p-achievement__details--active');
    element.scrollIntoView();
})   