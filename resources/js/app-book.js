import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);
import './bootstrap';
import './header.js';
import './slider';
// import './slider-costom'
import './about-coe';
import './faqs';
import './footer';
import './auto-complete';
// import './doctors';
import './book-an-appointment';
// import "./condition-landing";
import './scroll';



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