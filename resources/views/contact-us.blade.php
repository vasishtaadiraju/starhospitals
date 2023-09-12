@extends('layout.main')
@section('css')
@vite(['resources/scss/contact.scss', 'resources/js/contact.js'])
@endsection
@section('meta-title',"Contact Us | STAR Hospitals | Leading Healthcare Innovators")
@section('meta-description',"Connect with STAR Hospitals for exceptional medical care. Our skilled team is here to provide for your healthcare needs and address your concerns with utmost care and expertise.")

@section('content')
<x-banner :imgurl="Vite::asset('resources/images/banner/contact.webp')" :text="'Quality Healthcare Services in Hyderabad | Star Hospitals'" :$breadcrum/>

<div class="ui-background">

<x-contact-us/>
</div>
<x-gap/>
<x-gap/>
<x-find-us :$branches />
<x-gap/>
<x-gap/>
<div class="ui-background">

<x-faqs :content="$about"  :$faqs/>
</div>
{{-- <x-gap/> --}}

@endsection
