import "./app";
import './slider';
import './faqs';
import './auto-complete';
import './doctors';
import './scroll';

console.log(document.querySelector('.key-services__wrapper').childNodes[1].childNodes[0].childNodes.length);

document.addEventListener("DOMContentLoaded", async () => {

  
    if(document.querySelector('.key-services__wrapper').childNodes[1].childNodes[0].childNodes.length == 0)
{
    console.log(document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.previousElementSibling);
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.previousElementSibling.remove()
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove();
    // document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    // document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    // document.querySelector('.key-services__wrapper').remove()
}
    
    
});