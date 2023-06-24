import "./app";
import './slider';
import './about-coe';
import './faqs';
import './footer';
import './auto-complete';
import './doctors';
// import './book-an-appointment';
import './scroll';


document.getElementsByClassName('search-doctor__submit-btn')[0].addEventListener('click',function(e){
e.preventDefault();

window.location.href = document.getElementsByClassName('doctor-select-box')[0].value;
}) 