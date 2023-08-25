let screenWidth = screen.width;
$('.slider').slick({
    dots:true,
    arrows:false,
    autoplay:false,
}) 

$('.virtual-tour-slider').slick({
    dots:false,
    arrows:true,
 
})
$('.int-reviews').slick({
    dots:false,
    arrows:true,
}) 
$('.specialists-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:4,
    infinite:true,
    centerMode: true,

    responsive: [{
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 3
        }
    },{
        breakpoint: 1024,
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


$('.physical-consultation__dates-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:4,
    infinite:false,
    responsive: [{
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: false,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 769,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },
    {
        breakpoint: 601,
        settings: {
            // dots: true,
            arrows: false,
        }
    }
]
})

$('.condition-tabs-slider').slick({
    // dots:true,
    arrows:true,
    slidesToShow:4,
    responsive: [{
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 4
        }
    },{
        breakpoint: 1025,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 4
        }
    },
    {
        breakpoint: 769,
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
            slidesToShow: 2
        }
    }
]
})


$('.conditions-image-slider').slick({
    // dots:true,
    arrows:false,
    autoplay:true,
    slidesToShow:3,
    responsive: [{
        breakpoint: 1025,
        settings: {
            // dots: true,
            // arrows: true,
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
            arrows: false,
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
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },{
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
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },{
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


$('.key-services__wrapper--speciality').slick({
    // dots:true,
    arrows:true,
    slidesToShow:5,
    responsive: [{
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
        }
    },{
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
        breakpoint: 1275,
        settings: {
            // dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    },{
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
    $('.key-services-slider').slick({
        // dots:true,
        arrows:true,
        slidesToShow:5,
        responsive: [{
            breakpoint: 1275,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2
            }
        },{
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
}
else
{
    $('.key-services-slider').slick({
        // dots:true,
        arrows:true,
        // slidesToShow:1,
        slidesPerRow: 5,
        rows:2,
        slidesToScroll:1,
        infinite:true,
        centerMode: true,
        centerPadding: '0px',
        responsive: [{
            breakpoint: 1025,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesPerRow: 4,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 769,
            settings: {
                // dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1,
                rows:2,
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
    
                rows:1,
            }
        }
    ]
    })
}



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


