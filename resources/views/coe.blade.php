@extends('layout.main')
@section('css')
@vite(['resources/scss/speciality.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text"/>  
<x-scroll-tabs :$tabs/>
<x-gap/>    
<x-about-speciality :$content/>
<x-gap/>    
{{-- <x-our-specialists :$content :branches='$content->branches' :$coes/> --}}
    <x-coe-specialists :$content/>
<x-gap/>
<x-locations :locations='$content->branches'/>
<x-gap/>
<div class="ui-background">
<x-talk-doctor :$content :$coes/>
</div>
<x-gap/>
<x-testimonials  :testimonials='$content->testimonials'/>
<x-gap/>
<div class="ui-background">

<x-blogs :$content :blogs='$content->blogs'/>
</div>
<x-gap/>
<x-media :$content :media='$content->media'/> 
<x-gap/>
<div class="ui-background">

<x-faqs :faqs='$content->faqs'/> 
</div>


@endsection