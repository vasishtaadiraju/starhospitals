let screenWidth = screen.width;
$('.slider').slick({
    dots:true,
    arrows:false,
}) 

$('.specialists-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:4,
    infinite:true,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
]
})  

$('.blogs-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:3,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
]
})
$('.testimonials-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:3,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
]
})

$('.media-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:3,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
]
})

$('.reviews-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:2,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
]
})

$('.gallery-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:1,
    slidesPerRow: 4,
    rows:2,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    },
    {
        breakpoint: 768,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            
            rows:3,
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
    slidesPerRow: 2,

            rows:4,
        }
    }
]
})
if(screenWidth < 769)
{
    $('.awards-accolades').slick({
        // dots:true,
        arrows:true,
        slidesToShow:2,
        responsive: [{
            breakpoint: 1025,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 601,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }
    ]
    })
}