import "./app";
import './slider';
import './faqs';
import './auto-complete';
import './doctors';
import './scroll';



document.addEventListener("DOMContentLoaded", async () => {

  
    if(document.querySelector('.key-services__wrapper').childNodes[1] != undefined && document.querySelector('.key-services__wrapper').childNodes[1].childNodes[0].childNodes.length == 0)
{
    
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.previousElementSibling.remove()
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove();
    // document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    // document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    // document.querySelector('.key-services__wrapper').remove()
}
    
    
});