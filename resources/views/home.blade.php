@extends('layout.main')
@section('css')
@vite(['resources/scss/homepage.scss', 'resources/js/home.js'])
<link rel=“canonical” href=“https://starhospitals.in/” />
@endsection
@section('meta-title',$content->meta_title)
@section('meta-description',$content->meta_description)
@push('page-schema')

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "Star Hospitals in Hyderabad",
      "url": "https://www.starhospitals.in",
      "logo": "https://starhospitalsuat.s3.amazonaws.com/ujvabylMydyA9er4aLzgR2bR5FJdEJHJaNAal6PM.webp",
    "description": "Looking for a top-rated hospital near you? Visit Star Hospitals, the best multispeciality hospital in Hyderabad providing world-class healthcare services. Book your appointment today to receive the best medical care.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "18001027827",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": "IN",
        "availableLanguage": ["Telugu","Kannada","en","Tamil","Hindi","Urdu"]
      },
      "sameAs": [
        "https://www.facebook.com/starhospitalsin",
        "https://twitter.com/starhospitalsin/",
        "https://www.instagram.com/starhospitalsin/",
        "https://www.youtube.com/@StarHospitalsHyderabad/",
        "https://www.linkedin.com/company/star-hospitals-hyderabad/"
      ]
    }
    </script>



    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "hospital",
      "name": "Best Hospital in Hyderabad | Best Multispeciality Hospital In Hyderabad | Star Hospitals",
      "image": "https://starhospitalsuat.s3.amazonaws.com/ujvabylMydyA9er4aLzgR2bR5FJdEJHJaNAal6PM.webp",
      "@id": "",
      "url": "https://www.starhospitals.in",
      "telephone": "18001027827",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Survey No.74, Financial District, Nanakramguda",
        "addressLocality": "Hyderabad",
        "postalCode": "500008",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 17.4107978,
        "longitude": 78.341552
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/starhospitalsin",
        "https://twitter.com/starhospitalsin/",
        "https://www.instagram.com/starhospitalsin/",
        "https://www.youtube.com/@StarHospitalsHyderabad/",
        "https://www.linkedin.com/company/star-hospitals-hyderabad/"
      ]
    }
    </script>









    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Webpage",
    "headline": "Multispeciality Hospital In Hyderabad | Best Hospital Near Me - Star Hospitals",
    "@id":"https://www.starhospitals.in/",
    "thumbnailUrl": "https://starhospitalsuat.s3.amazonaws.com/ujvabylMydyA9er4aLzgR2bR5FJdEJHJaNAal6PM.webp",
    "name": "Star Hospitals",
    "description": "Looking for a top-rated hospital near you? Visit Star Hospitals, the best multispeciality hospital in Hyderabad providing world-class healthcare services. Book your appointment today to receive the best medical care.",
    "publisher": "Star Multi Speciality Hospitals",
    "creator": ["Star Hospitals Hyderabad"],
    "keywords": ["best hospitals in hyderabad,Hospitals In Nanakramguda,Hospital Near Hitech City,Hospital Near Gachibowli,Hospital Near Manikonda,Hospital Near Me,Hospital In Hyderabad,Top Hospitals In Hyderabad"]
    }</script>

@endpush
@section('content')
<x-slider :$content/>
<x-search-doctor :$branches :$coes/>


<x-highlights/>

<x-gap/>
{{-- <div class="ui-background"> --}}

{{-- </div> --}}
<x-gap/>
<x-centerof-excellence :$coes/>

{{--  <x-about-coe  :$coes/>  --}}
<x-gap/>

{{--  <x-gap/>  --}}
<div class="ui-background">
  <x-gap/>
<x-our-specialists :$content :$branches  :$coes/>
<x-gap/>
</div>
{{-- <x-gap/> --}}
<x-gap/>

{{--  <x-gap/>  --}}
<x-why-choose-us :$content/>

<x-gap/>
{{-- <x-gap/> --}}
<x-story :$content/>
<x-gap/>
{{--  <x-gap/>  --}}

<x-about-us :$content/>
{{--  <x-gap/>  --}}
<x-gap/>

{{-- <x-testimonials :$content  :testimonials='$reviews'/> --}}


{{-- ===================================================Patient Videos =============================================== --}}





<div class="ui-background">
<x-gap/>

<x-heading :title="'Reviews From Our Patients'" :description="''" />
    <div class="testimonials testimonials-slider">



        <div class="testimonials__card">
           <div class="ctg-video"><img src="" class="ctg-video play-video" data-video-link="https://www.youtube.com/embed/-oUvG5fjTLg?si=3xGlLDg7Wx_z3i2f?autoplay=1" data-src="{{Vite::asset('resources/images/review/maxresdefault.jpg')}}" alt=""> </div>
            <div class="testimonials__card__content">
                <p>Mr. RAGHUNATHA REDDY</p>

                <h4>Witness the Power of Swap Kidney Transplant | Star Hospitals</h4>
            </div>
        </div>
        <div class="testimonials__card">
            <div class="ctg-video"> <img src="" class="play-video" data-video-link="https://www.youtube.com/embed/SGnL_OVdBmU?si=r-NNFAIDvRfcgqa9?autoplay=1" data-src="{{Vite::asset('resources/images/review/maxresdefault (1).jpg')}}" alt=""> </div>
            <div class="testimonials__card__content">
                <p>Mrs. MARIAMMA</p>

                <h4>From Darkness to Light - Mariamma's Path to Recovery | Patient Testimonial | Star Hospitals</h4>
            </div>
        </div>
        <div class="testimonials__card">
            <div class="ctg-video">  <img src="" class="play-video" data-video-link="https://www.youtube.com/embed/zURrLzYna5o?si=h3HBg0yFVfFyHexN?autoplay=1" data-src="{{Vite::asset('resources/images/review/maxresdefault (2).jpg')}}" alt=""> </div>
            <div class="testimonials__card__content">
                <p>Mr. PRASHANTA SHARMA</p>

                <h4>Mr. Prashanta Sharma Shares his positive feedback on Gastrointestinal stromal tumor Surgery</h4>
            </div>
        </div>

    </div>




    <x-gap/>

</div>
    <x-gap/>


{{-- ================================================== end videos --}}


{{-- <x-testimonials-secondary :$content  :testimonials='$reviews'/> --}}

{{-- <x-gap/> --}}
{{--
<div class="ui-background">

<x-blogs :$content :$blogs/>
</div>
<x-gap/>
<x-media :$content :$media /> --}}
<x-gap/>

<x-consultation-request :$coes />
<x-gap/>
{{--  <x-gap/>  --}}

@endsection


    {{-- "$page_content->id"
"$page_content->banner1_desktop"
"$page_content->banner1_mobile"
"$page_content->banner1_alt"
"$page_content->banner1_title"
"$page_content->banner1_description"
"$page_content->banner1_cta"


public $id;
public $banner1_desktop;
public $banner1_mobile;
public $banner1_alt;
public $banner1_title;
public $banner1_description;
public $banner1_cta;

$this->id = $id;
$this->banner1_desktop = $banner1_desktop;
$this->banner1_mobile = $banner1_mobile;
$this->banner1_alt = $banner1_alt;
$this->banner1_title = $banner1_title;
$this->banner1_description = $banner1_description;
$this->banner1_cta = $banner1_cta;
 , $id , $banner1_desktop , $banner1_mobile , $banner1_alt , $banner1_title , $banner1_description , $banner1_cta; --}}
