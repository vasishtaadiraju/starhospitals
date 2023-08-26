@extends('layout.main')
@section('css')
@vite(['resources/scss/speciality.scss', 'resources/js/speciality.js'])
@endsection
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text" :$breadcrum/>  
<x-scroll-tabs :$tabs/>
<x-gap/>    
<x-about-speciality :$content/>
<x-gap/>    
{{-- <x-our-specialists :$content :branches='$content->branches' :$coes/> --}}
<x-coe-specialists :$content/>
@if($content->services_treatments != null)
<x-gap/>
<x-services-treatment :$content />
<x-gap/>

@endif

@if (count($coes[0]->specialities) > 0)
<div class="ui-background">
    <x-key-services :$coes />
</div>   
@endif


<x-gap/>
<x-locations :$content  :locations='$content->branches'/>
<x-gap/>
<div class="ui-background">
<x-talk-doctor :$content />
</div>
<x-gap/>
{{-- <x-testimonials />
     --}}
@if (count($content->testimonials) > 0)
<x-testimonials-secondary :$content   :testimonials='$content->testimonials'/>
    <x-gap/>  
@endif
     
 {{--
<div class="ui-background">

<x-blogs :$content :blogs='$content->blogs'/>
</div>
<x-gap/>
<x-media :$content :media='$content->media'/> 
<x-gap/> --}}
<div class="ui-background">
<x-faqs :$content :faqs='$content->faqs'/> 
</div>


@endsection