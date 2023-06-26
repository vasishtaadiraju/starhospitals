import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);
import './utils/event-handler';
import './bootstrap';
import './header.js';
import './footer';

// import './slider';
// // import './slider-costom'
// import './about-coe';
// import './faqs';
// import './footer';
// import './auto-complete';
// import './doctors';
// // import './book-an-appointment';
// import './scroll';


const images = Array.from(document.querySelectorAll('img'));
        
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const image = entry.target;

                image.src = image.dataset.src;
                // image.onload = () => image.previousElementSibling.remove();

                imageObserver.unobserve(image);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

domSelector('.play-video','click',videoPlayer);

function videoPlayer()
{
    let src = this.getAttribute('data-video-link')
    let type = this.getAttribute('data-type')
    console.log();
    let playerHtml = `
    <div class="video-player">
        <span id="video-player-close">X</span>
        <div class="video-player__container">
            <iframe width="100%" height="100%" src="${src}" title="YouTube video player" frameborder="0"  allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;autoplay" allowfullscreen></iframe>
        </div>
    </div>`
    if(type == 'IMG')
    {
        playerHtml =  `
        <div class="video-player">
            <span id="video-player-close">X</span>
            <div class="video-player__container video-player__container--image">
        <img src="${src}" alt="" />
                
            </div>
        </div>
        `
        
        
        
    }
    document.querySelector('body').insertAdjacentHTML('afterbegin',playerHtml);
    document.getElementById('video-player-close').addEventListener('click',function(){
        this.parentNode.remove();
    })
    document.querySelector('.video-player').addEventListener('click',function(){
        this.remove();
    })
}

domSelector('.file-upload-field','click',function(){
    console.log(this.nextElementSibling.click());
})