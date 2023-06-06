@extends('layout.main')
@section('content')
<x-banner :imgurl="config('variables.asset') .$about->banner_desktop" :text="$about->banner_text"/>
<x-gap/>
<x-mission-vision :$about />
<x-gap/>
<x-chairman-desk :$about />
{{-- <x-gap/> --}}
<div class="ui-background">
    <x-awards/>

</div>

<x-gap/>
<x-about-star :$about />
<x-gap/>

<div class="ui-background">
    <x-locations :$about :locations='$branches'/>

</div>
<x-gap/>

<x-gallery/>
<x-gap/>

<div class="ui-background">
    <x-faqs :$about :$faqs/>


</div>
{{-- <x-gap/> --}}
@endsection
