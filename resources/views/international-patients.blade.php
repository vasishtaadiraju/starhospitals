@extends('layout.main')
@section('css')
@vite(['resources/scss/international-patients.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text" :$breadcrum/>
<x-int-highlight :$content/>
<x-gap/>
<x-key-services :coes='[]' />
 <x-gap/>
{{--<x-int-reviews/> --}}
<div class="ui-background">

<x-virtual-tour :$content />
</div>
<x-gap/>
<x-our-process/>
<x-gap/>
<div class="ui-background">
<x-facilities :$content />
</div>
<x-gap/>
<x-testimonials  :testimonials=[]/>
<x-gap/>
<div class="ui-background">
<x-int-enquiry-form :$content />
</div>
<x-gap/>
<x-faqs :faqs='$faqs'/> 
<x-gap/>
@endsection
