@extends('layout.main')
@section('css')
@vite(['resources/scss/branch.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text"/>  
    <x-scroll-tabs/>
<x-gap/>    
<x-about-speciality :$content/>
<x-gap/>
<x-highlights/>
<x-gap/>
<x-key-services/>
 <x-gap/>
 <div class="ui-background">
<x-doctors :type="'flex'" :$branches  :$coes/>
 </div>
<x-gap/>


<x-why-choose-us :$content/>

<x-gap/>
<div class="ui-background">
<x-testimonials  :testimonials='$content->testimonials'/>
</div>
<x-gap/>


<x-blogs :$content :blogs='$content->blogs'/>

<x-gap/>

<div class="ui-background">

<x-faqs :faqs='$content->faqs'/> 
</div>


@endsection