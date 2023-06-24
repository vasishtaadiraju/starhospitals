import './utils/event-handler';
// const  coes = document.querySelectorAll('.coes__list__item');
import { httpRequest, debounce, removeClass } from "./utils/event-handler";



async function printCoe(id,type)
{
    let response = await httpRequest('/api/getCoeSpeciality','POST',{id,type});
        
    // this.childNodes[1].insertAdjacentHTML("afterend",  htmlData);
document.querySelector('.coes__description--desktop').innerHTML = "";

let htmlData = `<div class="coes__description__wrapper coes__description__wrapper--mobile" >

<img class="coes__description__image" id="coe-list" src="${import.meta.env.VITE_ASSET_URL}${response.data.homepage_image}" alt="${response.data.homepage_image_alt}">
<h2 class="coes__description__title">${response.data.name}</h2>
<p class="coes__description__content">
${response.data.homepage_description}

</p>




${type == 'coe' ? `<a href="/specialities/${response.data.slug}" class="view-all-btn coes__description__wrapper__read-more-btn">
Learn More
</a>` : `<a href="/specialities/${response.data.slug}" class="view-all-btn coes__description__wrapper__read-more-btn">
Learn More
</a>`}


</div>
`


let desktopHTML =  `<div class="coes__description__wrapper" >

<img class="coes__description__image" id="coe-list" src="${import.meta.env.VITE_ASSET_URL}${response.data.homepage_image}" alt="${response.data.homepage_image_alt}" alt="">
<h3 class="coes__description__title">${response.data.name}</h3>
<p class="coes__description__content">
${response.data.homepage_description}
</p>








<svg class="coes_dots-left" width="75" height="115" viewBox="0 0 75 115" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="72.5" cy="62.5" r="2.5" transform="rotate(90 72.5 62.5)" fill="#004E9E"/>
<circle cx="32.5" cy="62.5" r="2.5" transform="rotate(90 32.5 62.5)" fill="#004E9E"/>
<circle cx="52.5" cy="62.5" r="2.5" transform="rotate(90 52.5 62.5)" fill="#004E9E"/>
<circle cx="12.5" cy="62.5" r="2.5" transform="rotate(90 12.5 62.5)" fill="#004E9E"/>
<circle cx="72.5" cy="102.5" r="2.5" transform="rotate(90 72.5 102.5)" fill="#004E9E"/>
<circle cx="32.5" cy="102.5" r="2.5" transform="rotate(90 32.5 102.5)" fill="#004E9E"/>
<circle cx="52.5" cy="102.5" r="2.5" transform="rotate(90 52.5 102.5)" fill="#004E9E"/>
<circle cx="12.5" cy="102.5" r="2.5" transform="rotate(90 12.5 102.5)" fill="#004E9E"/>
<circle cx="62.5" cy="102.5" r="2.5" transform="rotate(90 62.5 102.5)" fill="#004E9E"/>
<circle cx="22.5" cy="102.5" r="2.5" transform="rotate(90 22.5 102.5)" fill="#004E9E"/>
<circle cx="42.5" cy="102.5" r="2.5" transform="rotate(90 42.5 102.5)" fill="#004E9E"/>
<circle cx="2.5" cy="102.5" r="2.5" transform="rotate(90 2.5 102.5)" fill="#004E9E"/>
<circle cx="72.5" cy="82.5" r="2.5" transform="rotate(90 72.5 82.5)" fill="#004E9E"/>
<circle cx="32.5" cy="82.5" r="2.5" transform="rotate(90 32.5 82.5)" fill="#004E9E"/>
<circle cx="52.5" cy="82.5" r="2.5" transform="rotate(90 52.5 82.5)" fill="#004E9E"/>
<circle cx="12.5" cy="82.5" r="2.5" transform="rotate(90 12.5 82.5)" fill="#004E9E"/>
<circle cx="62.5" cy="82.5" r="2.5" transform="rotate(90 62.5 82.5)" fill="#004E9E"/>
<circle cx="22.5" cy="82.5" r="2.5" transform="rotate(90 22.5 82.5)" fill="#004E9E"/>
<circle cx="42.5" cy="82.5" r="2.5" transform="rotate(90 42.5 82.5)" fill="#004E9E"/>
<circle cx="2.5" cy="82.5" r="2.5" transform="rotate(90 2.5 82.5)" fill="#004E9E"/>
<circle cx="62.5" cy="62.5" r="2.5" transform="rotate(90 62.5 62.5)" fill="#004E9E"/>
<circle cx="22.5" cy="62.5" r="2.5" transform="rotate(90 22.5 62.5)" fill="#004E9E"/>
<circle cx="42.5" cy="62.5" r="2.5" transform="rotate(90 42.5 62.5)" fill="#004E9E"/>
<circle cx="2.5" cy="62.5" r="2.5" transform="rotate(90 2.5 62.5)" fill="#004E9E"/>
<circle cx="72.5" cy="72.5" r="2.5" transform="rotate(90 72.5 72.5)" fill="#004E9E"/>
<circle cx="32.5" cy="72.5" r="2.5" transform="rotate(90 32.5 72.5)" fill="#004E9E"/>
<circle cx="52.5" cy="72.5" r="2.5" transform="rotate(90 52.5 72.5)" fill="#004E9E"/>
<circle cx="12.5" cy="72.5" r="2.5" transform="rotate(90 12.5 72.5)" fill="#004E9E"/>
<circle cx="72.5" cy="112.5" r="2.5" transform="rotate(90 72.5 112.5)" fill="#004E9E"/>
<circle cx="32.5" cy="112.5" r="2.5" transform="rotate(90 32.5 112.5)" fill="#004E9E"/>
<circle cx="52.5" cy="112.5" r="2.5" transform="rotate(90 52.5 112.5)" fill="#004E9E"/>
<circle cx="12.5" cy="112.5" r="2.5" transform="rotate(90 12.5 112.5)" fill="#004E9E"/>
<circle cx="62.5" cy="112.5" r="2.5" transform="rotate(90 62.5 112.5)" fill="#004E9E"/>
<circle cx="22.5" cy="112.5" r="2.5" transform="rotate(90 22.5 112.5)" fill="#004E9E"/>
<circle cx="42.5" cy="112.5" r="2.5" transform="rotate(90 42.5 112.5)" fill="#004E9E"/>
<circle cx="2.5" cy="112.5" r="2.5" transform="rotate(90 2.5 112.5)" fill="#004E9E"/>
<circle cx="72.5" cy="92.5" r="2.5" transform="rotate(90 72.5 92.5)" fill="#004E9E"/>
<circle cx="32.5" cy="92.5" r="2.5" transform="rotate(90 32.5 92.5)" fill="#004E9E"/>
<circle cx="52.5" cy="92.5" r="2.5" transform="rotate(90 52.5 92.5)" fill="#004E9E"/>
<circle cx="12.5" cy="92.5" r="2.5" transform="rotate(90 12.5 92.5)" fill="#004E9E"/>
<circle cx="62.5" cy="92.5" r="2.5" transform="rotate(90 62.5 92.5)" fill="#004E9E"/>
<circle cx="22.5" cy="92.5" r="2.5" transform="rotate(90 22.5 92.5)" fill="#004E9E"/>
<circle cx="42.5" cy="92.5" r="2.5" transform="rotate(90 42.5 92.5)" fill="#004E9E"/>
<circle cx="2.5" cy="92.5" r="2.5" transform="rotate(90 2.5 92.5)" fill="#004E9E"/>
<circle cx="62.5" cy="72.5" r="2.5" transform="rotate(90 62.5 72.5)" fill="#004E9E"/>
<circle cx="22.5" cy="72.5" r="2.5" transform="rotate(90 22.5 72.5)" fill="#004E9E"/>
<circle cx="42.5" cy="72.5" r="2.5" transform="rotate(90 42.5 72.5)" fill="#004E9E"/>
<circle cx="2.5" cy="72.5" r="2.5" transform="rotate(90 2.5 72.5)" fill="#004E9E"/>
<circle cx="72.5" cy="2.5" r="2.5" transform="rotate(90 72.5 2.5)" fill="#004E9E"/>
<circle cx="32.5" cy="2.5" r="2.5" transform="rotate(90 32.5 2.5)" fill="#004E9E"/>
<circle cx="52.5" cy="2.5" r="2.5" transform="rotate(90 52.5 2.5)" fill="#004E9E"/>
<circle cx="12.5" cy="2.5" r="2.5" transform="rotate(90 12.5 2.5)" fill="#004E9E"/>
<circle cx="72.5" cy="42.5" r="2.5" transform="rotate(90 72.5 42.5)" fill="#004E9E"/>
<circle cx="32.5" cy="42.5" r="2.5" transform="rotate(90 32.5 42.5)" fill="#004E9E"/>
<circle cx="52.5" cy="42.5" r="2.5" transform="rotate(90 52.5 42.5)" fill="#004E9E"/>
<circle cx="12.5" cy="42.5" r="2.5" transform="rotate(90 12.5 42.5)" fill="#004E9E"/>
<circle cx="62.5" cy="42.5" r="2.5" transform="rotate(90 62.5 42.5)" fill="#004E9E"/>
<circle cx="22.5" cy="42.5" r="2.5" transform="rotate(90 22.5 42.5)" fill="#004E9E"/>
<circle cx="42.5" cy="42.5" r="2.5" transform="rotate(90 42.5 42.5)" fill="#004E9E"/>
<circle cx="2.5" cy="42.5" r="2.5" transform="rotate(90 2.5 42.5)" fill="#004E9E"/>
<circle cx="72.5" cy="22.5" r="2.5" transform="rotate(90 72.5 22.5)" fill="#004E9E"/>
<circle cx="32.5" cy="22.5" r="2.5" transform="rotate(90 32.5 22.5)" fill="#004E9E"/>
<circle cx="52.5" cy="22.5" r="2.5" transform="rotate(90 52.5 22.5)" fill="#004E9E"/>
<circle cx="12.5" cy="22.5" r="2.5" transform="rotate(90 12.5 22.5)" fill="#004E9E"/>
<circle cx="62.5" cy="22.5" r="2.5" transform="rotate(90 62.5 22.5)" fill="#004E9E"/>
<circle cx="22.5" cy="22.5" r="2.5" transform="rotate(90 22.5 22.5)" fill="#004E9E"/>
<circle cx="42.5" cy="22.5" r="2.5" transform="rotate(90 42.5 22.5)" fill="#004E9E"/>
<circle cx="2.5" cy="22.5" r="2.5" transform="rotate(90 2.5 22.5)" fill="#004E9E"/>
<circle cx="62.5" cy="2.5" r="2.5" transform="rotate(90 62.5 2.5)" fill="#004E9E"/>
<circle cx="22.5" cy="2.5" r="2.5" transform="rotate(90 22.5 2.5)" fill="#004E9E"/>
<circle cx="42.5" cy="2.5" r="2.5" transform="rotate(90 42.5 2.5)" fill="#004E9E"/>
<circle cx="2.5" cy="2.5" r="2.5" transform="rotate(90 2.5 2.5)" fill="#004E9E"/>
<circle cx="72.5" cy="12.5" r="2.5" transform="rotate(90 72.5 12.5)" fill="#004E9E"/>
<circle cx="32.5" cy="12.5" r="2.5" transform="rotate(90 32.5 12.5)" fill="#004E9E"/>
<circle cx="52.5" cy="12.5" r="2.5" transform="rotate(90 52.5 12.5)" fill="#004E9E"/>
<circle cx="12.5" cy="12.5" r="2.5" transform="rotate(90 12.5 12.5)" fill="#004E9E"/>
<circle cx="72.5" cy="52.5" r="2.5" transform="rotate(90 72.5 52.5)" fill="#004E9E"/>
<circle cx="32.5" cy="52.5" r="2.5" transform="rotate(90 32.5 52.5)" fill="#004E9E"/>
<circle cx="52.5" cy="52.5" r="2.5" transform="rotate(90 52.5 52.5)" fill="#004E9E"/>
<circle cx="12.5" cy="52.5" r="2.5" transform="rotate(90 12.5 52.5)" fill="#004E9E"/>
<circle cx="62.5" cy="52.5" r="2.5" transform="rotate(90 62.5 52.5)" fill="#004E9E"/>
<circle cx="22.5" cy="52.5" r="2.5" transform="rotate(90 22.5 52.5)" fill="#004E9E"/>
<circle cx="42.5" cy="52.5" r="2.5" transform="rotate(90 42.5 52.5)" fill="#004E9E"/>
<circle cx="2.5" cy="52.5" r="2.5" transform="rotate(90 2.5 52.5)" fill="#004E9E"/>
<circle cx="72.5" cy="32.5" r="2.5" transform="rotate(90 72.5 32.5)" fill="#004E9E"/>
<circle cx="32.5" cy="32.5" r="2.5" transform="rotate(90 32.5 32.5)" fill="#004E9E"/>
<circle cx="52.5" cy="32.5" r="2.5" transform="rotate(90 52.5 32.5)" fill="#004E9E"/>
<circle cx="12.5" cy="32.5" r="2.5" transform="rotate(90 12.5 32.5)" fill="#004E9E"/>
<circle cx="62.5" cy="32.5" r="2.5" transform="rotate(90 62.5 32.5)" fill="#004E9E"/>
<circle cx="22.5" cy="32.5" r="2.5" transform="rotate(90 22.5 32.5)" fill="#004E9E"/>
<circle cx="42.5" cy="32.5" r="2.5" transform="rotate(90 42.5 32.5)" fill="#004E9E"/>
<circle cx="2.5" cy="32.5" r="2.5" transform="rotate(90 2.5 32.5)" fill="#004E9E"/>
<circle cx="62.5" cy="12.5" r="2.5" transform="rotate(90 62.5 12.5)" fill="#004E9E"/>
<circle cx="22.5" cy="12.5" r="2.5" transform="rotate(90 22.5 12.5)" fill="#004E9E"/>
<circle cx="42.5" cy="12.5" r="2.5" transform="rotate(90 42.5 12.5)" fill="#004E9E"/>
<circle cx="2.5" cy="12.5" r="2.5" transform="rotate(90 2.5 12.5)" fill="#004E9E"/>
</svg>
<svg class="coes_dots-right" width="75" height="115" viewBox="0 0 75 115" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="72.5" cy="62.5" r="2.5" transform="rotate(90 72.5 62.5)" fill="#004E9E"/>
<circle cx="32.5" cy="62.5" r="2.5" transform="rotate(90 32.5 62.5)" fill="#004E9E"/>
<circle cx="52.5" cy="62.5" r="2.5" transform="rotate(90 52.5 62.5)" fill="#004E9E"/>
<circle cx="12.5" cy="62.5" r="2.5" transform="rotate(90 12.5 62.5)" fill="#004E9E"/>
<circle cx="72.5" cy="102.5" r="2.5" transform="rotate(90 72.5 102.5)" fill="#004E9E"/>
<circle cx="32.5" cy="102.5" r="2.5" transform="rotate(90 32.5 102.5)" fill="#004E9E"/>
<circle cx="52.5" cy="102.5" r="2.5" transform="rotate(90 52.5 102.5)" fill="#004E9E"/>
<circle cx="12.5" cy="102.5" r="2.5" transform="rotate(90 12.5 102.5)" fill="#004E9E"/>
<circle cx="62.5" cy="102.5" r="2.5" transform="rotate(90 62.5 102.5)" fill="#004E9E"/>
<circle cx="22.5" cy="102.5" r="2.5" transform="rotate(90 22.5 102.5)" fill="#004E9E"/>
<circle cx="42.5" cy="102.5" r="2.5" transform="rotate(90 42.5 102.5)" fill="#004E9E"/>
<circle cx="2.5" cy="102.5" r="2.5" transform="rotate(90 2.5 102.5)" fill="#004E9E"/>
<circle cx="72.5" cy="82.5" r="2.5" transform="rotate(90 72.5 82.5)" fill="#004E9E"/>
<circle cx="32.5" cy="82.5" r="2.5" transform="rotate(90 32.5 82.5)" fill="#004E9E"/>
<circle cx="52.5" cy="82.5" r="2.5" transform="rotate(90 52.5 82.5)" fill="#004E9E"/>
<circle cx="12.5" cy="82.5" r="2.5" transform="rotate(90 12.5 82.5)" fill="#004E9E"/>
<circle cx="62.5" cy="82.5" r="2.5" transform="rotate(90 62.5 82.5)" fill="#004E9E"/>
<circle cx="22.5" cy="82.5" r="2.5" transform="rotate(90 22.5 82.5)" fill="#004E9E"/>
<circle cx="42.5" cy="82.5" r="2.5" transform="rotate(90 42.5 82.5)" fill="#004E9E"/>
<circle cx="2.5" cy="82.5" r="2.5" transform="rotate(90 2.5 82.5)" fill="#004E9E"/>
<circle cx="62.5" cy="62.5" r="2.5" transform="rotate(90 62.5 62.5)" fill="#004E9E"/>
<circle cx="22.5" cy="62.5" r="2.5" transform="rotate(90 22.5 62.5)" fill="#004E9E"/>
<circle cx="42.5" cy="62.5" r="2.5" transform="rotate(90 42.5 62.5)" fill="#004E9E"/>
<circle cx="2.5" cy="62.5" r="2.5" transform="rotate(90 2.5 62.5)" fill="#004E9E"/>
<circle cx="72.5" cy="72.5" r="2.5" transform="rotate(90 72.5 72.5)" fill="#004E9E"/>
<circle cx="32.5" cy="72.5" r="2.5" transform="rotate(90 32.5 72.5)" fill="#004E9E"/>
<circle cx="52.5" cy="72.5" r="2.5" transform="rotate(90 52.5 72.5)" fill="#004E9E"/>
<circle cx="12.5" cy="72.5" r="2.5" transform="rotate(90 12.5 72.5)" fill="#004E9E"/>
<circle cx="72.5" cy="112.5" r="2.5" transform="rotate(90 72.5 112.5)" fill="#004E9E"/>
<circle cx="32.5" cy="112.5" r="2.5" transform="rotate(90 32.5 112.5)" fill="#004E9E"/>
<circle cx="52.5" cy="112.5" r="2.5" transform="rotate(90 52.5 112.5)" fill="#004E9E"/>
<circle cx="12.5" cy="112.5" r="2.5" transform="rotate(90 12.5 112.5)" fill="#004E9E"/>
<circle cx="62.5" cy="112.5" r="2.5" transform="rotate(90 62.5 112.5)" fill="#004E9E"/>
<circle cx="22.5" cy="112.5" r="2.5" transform="rotate(90 22.5 112.5)" fill="#004E9E"/>
<circle cx="42.5" cy="112.5" r="2.5" transform="rotate(90 42.5 112.5)" fill="#004E9E"/>
<circle cx="2.5" cy="112.5" r="2.5" transform="rotate(90 2.5 112.5)" fill="#004E9E"/>
<circle cx="72.5" cy="92.5" r="2.5" transform="rotate(90 72.5 92.5)" fill="#004E9E"/>
<circle cx="32.5" cy="92.5" r="2.5" transform="rotate(90 32.5 92.5)" fill="#004E9E"/>
<circle cx="52.5" cy="92.5" r="2.5" transform="rotate(90 52.5 92.5)" fill="#004E9E"/>
<circle cx="12.5" cy="92.5" r="2.5" transform="rotate(90 12.5 92.5)" fill="#004E9E"/>
<circle cx="62.5" cy="92.5" r="2.5" transform="rotate(90 62.5 92.5)" fill="#004E9E"/>
<circle cx="22.5" cy="92.5" r="2.5" transform="rotate(90 22.5 92.5)" fill="#004E9E"/>
<circle cx="42.5" cy="92.5" r="2.5" transform="rotate(90 42.5 92.5)" fill="#004E9E"/>
<circle cx="2.5" cy="92.5" r="2.5" transform="rotate(90 2.5 92.5)" fill="#004E9E"/>
<circle cx="62.5" cy="72.5" r="2.5" transform="rotate(90 62.5 72.5)" fill="#004E9E"/>
<circle cx="22.5" cy="72.5" r="2.5" transform="rotate(90 22.5 72.5)" fill="#004E9E"/>
<circle cx="42.5" cy="72.5" r="2.5" transform="rotate(90 42.5 72.5)" fill="#004E9E"/>
<circle cx="2.5" cy="72.5" r="2.5" transform="rotate(90 2.5 72.5)" fill="#004E9E"/>
<circle cx="72.5" cy="2.5" r="2.5" transform="rotate(90 72.5 2.5)" fill="#004E9E"/>
<circle cx="32.5" cy="2.5" r="2.5" transform="rotate(90 32.5 2.5)" fill="#004E9E"/>
<circle cx="52.5" cy="2.5" r="2.5" transform="rotate(90 52.5 2.5)" fill="#004E9E"/>
<circle cx="12.5" cy="2.5" r="2.5" transform="rotate(90 12.5 2.5)" fill="#004E9E"/>
<circle cx="72.5" cy="42.5" r="2.5" transform="rotate(90 72.5 42.5)" fill="#004E9E"/>
<circle cx="32.5" cy="42.5" r="2.5" transform="rotate(90 32.5 42.5)" fill="#004E9E"/>
<circle cx="52.5" cy="42.5" r="2.5" transform="rotate(90 52.5 42.5)" fill="#004E9E"/>
<circle cx="12.5" cy="42.5" r="2.5" transform="rotate(90 12.5 42.5)" fill="#004E9E"/>
<circle cx="62.5" cy="42.5" r="2.5" transform="rotate(90 62.5 42.5)" fill="#004E9E"/>
<circle cx="22.5" cy="42.5" r="2.5" transform="rotate(90 22.5 42.5)" fill="#004E9E"/>
<circle cx="42.5" cy="42.5" r="2.5" transform="rotate(90 42.5 42.5)" fill="#004E9E"/>
<circle cx="2.5" cy="42.5" r="2.5" transform="rotate(90 2.5 42.5)" fill="#004E9E"/>
<circle cx="72.5" cy="22.5" r="2.5" transform="rotate(90 72.5 22.5)" fill="#004E9E"/>
<circle cx="32.5" cy="22.5" r="2.5" transform="rotate(90 32.5 22.5)" fill="#004E9E"/>
<circle cx="52.5" cy="22.5" r="2.5" transform="rotate(90 52.5 22.5)" fill="#004E9E"/>
<circle cx="12.5" cy="22.5" r="2.5" transform="rotate(90 12.5 22.5)" fill="#004E9E"/>
<circle cx="62.5" cy="22.5" r="2.5" transform="rotate(90 62.5 22.5)" fill="#004E9E"/>
<circle cx="22.5" cy="22.5" r="2.5" transform="rotate(90 22.5 22.5)" fill="#004E9E"/>
<circle cx="42.5" cy="22.5" r="2.5" transform="rotate(90 42.5 22.5)" fill="#004E9E"/>
<circle cx="2.5" cy="22.5" r="2.5" transform="rotate(90 2.5 22.5)" fill="#004E9E"/>
<circle cx="62.5" cy="2.5" r="2.5" transform="rotate(90 62.5 2.5)" fill="#004E9E"/>
<circle cx="22.5" cy="2.5" r="2.5" transform="rotate(90 22.5 2.5)" fill="#004E9E"/>
<circle cx="42.5" cy="2.5" r="2.5" transform="rotate(90 42.5 2.5)" fill="#004E9E"/>
<circle cx="2.5" cy="2.5" r="2.5" transform="rotate(90 2.5 2.5)" fill="#004E9E"/>
<circle cx="72.5" cy="12.5" r="2.5" transform="rotate(90 72.5 12.5)" fill="#004E9E"/>
<circle cx="32.5" cy="12.5" r="2.5" transform="rotate(90 32.5 12.5)" fill="#004E9E"/>
<circle cx="52.5" cy="12.5" r="2.5" transform="rotate(90 52.5 12.5)" fill="#004E9E"/>
<circle cx="12.5" cy="12.5" r="2.5" transform="rotate(90 12.5 12.5)" fill="#004E9E"/>
<circle cx="72.5" cy="52.5" r="2.5" transform="rotate(90 72.5 52.5)" fill="#004E9E"/>
<circle cx="32.5" cy="52.5" r="2.5" transform="rotate(90 32.5 52.5)" fill="#004E9E"/>
<circle cx="52.5" cy="52.5" r="2.5" transform="rotate(90 52.5 52.5)" fill="#004E9E"/>
<circle cx="12.5" cy="52.5" r="2.5" transform="rotate(90 12.5 52.5)" fill="#004E9E"/>
<circle cx="62.5" cy="52.5" r="2.5" transform="rotate(90 62.5 52.5)" fill="#004E9E"/>
<circle cx="22.5" cy="52.5" r="2.5" transform="rotate(90 22.5 52.5)" fill="#004E9E"/>
<circle cx="42.5" cy="52.5" r="2.5" transform="rotate(90 42.5 52.5)" fill="#004E9E"/>
<circle cx="2.5" cy="52.5" r="2.5" transform="rotate(90 2.5 52.5)" fill="#004E9E"/>
<circle cx="72.5" cy="32.5" r="2.5" transform="rotate(90 72.5 32.5)" fill="#004E9E"/>
<circle cx="32.5" cy="32.5" r="2.5" transform="rotate(90 32.5 32.5)" fill="#004E9E"/>
<circle cx="52.5" cy="32.5" r="2.5" transform="rotate(90 52.5 32.5)" fill="#004E9E"/>
<circle cx="12.5" cy="32.5" r="2.5" transform="rotate(90 12.5 32.5)" fill="#004E9E"/>
<circle cx="62.5" cy="32.5" r="2.5" transform="rotate(90 62.5 32.5)" fill="#004E9E"/>
<circle cx="22.5" cy="32.5" r="2.5" transform="rotate(90 22.5 32.5)" fill="#004E9E"/>
<circle cx="42.5" cy="32.5" r="2.5" transform="rotate(90 42.5 32.5)" fill="#004E9E"/>
<circle cx="2.5" cy="32.5" r="2.5" transform="rotate(90 2.5 32.5)" fill="#004E9E"/>
<circle cx="62.5" cy="12.5" r="2.5" transform="rotate(90 62.5 12.5)" fill="#004E9E"/>
<circle cx="22.5" cy="12.5" r="2.5" transform="rotate(90 22.5 12.5)" fill="#004E9E"/>
<circle cx="42.5" cy="12.5" r="2.5" transform="rotate(90 42.5 12.5)" fill="#004E9E"/>
<circle cx="2.5" cy="12.5" r="2.5" transform="rotate(90 2.5 12.5)" fill="#004E9E"/>
</svg>
</div>
${type == 'coe' ? `<a href="/specialities/${response.data.slug}" class="view-all-btn coes__description__wrapper__read-more-btn">
Learn More
</a>` : `<a href="/specialities/${response.data.slug}" class="view-all-btn coes__description__wrapper__read-more-btn">
Learn More
</a>`}`


  return {
    'mobile':htmlData,
    'desktop':desktopHTML
  }
}









domSelector('.coes__list__item','click',async function() {
        let id = this.childNodes[1].getAttribute('data-id');
        let type = this.getAttribute('data-type');
        let cards = await printCoe(id,type);

{/* <img  src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt=""> */}

{/* <img  src="" data-src="{{Vite::asset('resources/images/Icons/Dots(1).png')}}" alt=""> */}
if(this.querySelector('.coes__description__wrapper--mobile') == null)
{
        this.childNodes[1].insertAdjacentHTML("afterend",  cards.mobile);

}


document.querySelector('.coes__description--desktop').insertAdjacentHTML("beforeend",cards.desktop);
    

       
        this.childNodes[2].classList.toggle("coes__description__wrapper--mobile--active");
});




// Default COE
document.addEventListener("DOMContentLoaded", async () => {

  
    let coe_id = document.querySelector(
        ".coes__list__item li"
    ).getAttribute('data-id');
    let type = document.querySelector(
      ".coes__list__item"
  ).getAttribute('data-type');

    let cards = await printCoe(coe_id,type);
    document.querySelector('.coes__description--desktop').insertAdjacentHTML("beforeend",cards.desktop);
  
    
    
});


