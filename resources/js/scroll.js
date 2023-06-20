
domSelector('.scroll-to-view','click',function(e) {
    e.preventDefault();
    let element = this.getAttribute('href');
    let section = document.querySelector(element);
    ;console.log(section); 
    section.scrollIntoView(false);
})  