
domSelector('.scroll-to-view','click',function(e) {
    e.preventDefault();
    let element = this.getAttribute('href');
    let section = document.querySelector(element);
    if(section == null)
    {
        return;
    }
    section.scrollIntoView(true);
})  