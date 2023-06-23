import "./app";
import './slider';
import './faqs';
import './auto-complete';
import './doctors';
import './scroll';

console.log(document.querySelector('.key-services__wrapper').childElementCount);
if(document.querySelector('.key-services__wrapper').childElementCount == 1)
{
    // console.log(document.querySelector('.key-services__wrapper').parentNode.previousElementSibling);
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    document.querySelector('.key-services__wrapper').parentNode.previousElementSibling.remove()
    document.querySelector('.key-services__wrapper').remove()
}