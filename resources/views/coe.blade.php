@extends('layout.main')
@section('content')
<x-banner :imgurl='$content->banner_desktop' :text="$content->banner_text"/>  
    <x-scroll-tabs/>
<x-gap/>    
<x-about-speciality :$content/>
<x-gap/>    
<x-our-specialists :$content :branches='$content->branches' :$coes/>
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