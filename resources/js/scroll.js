
domSelector('.scroll-to-view','click',function(e) {
    e.preventDefault();
    let element = this.getAttribute('href');
    let section = document.querySelector(element);
    let status = true;
    if(section == null)
    {
        return;
    }
    if(element == '#treatments-procedures')
    {
        status = false;
    }
    section.scrollIntoView(status);
})  