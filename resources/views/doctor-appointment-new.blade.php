@extends('layout.main')
@section('css')
@vite(['resources/scss/about.scss', 'resources/js/about.js'])
@endsection
{{--  @section('meta-title',$about->meta_title)  --}}
{{--  @section('meta-description',$about->meta_description)  --}}
@section('content')
<x-banner :imgurl="Vite::asset('resources/images/banner/doc-profile.png')" :text="'Doctors | Star Hospitals'" :$breadcrum />
{{--  <x-mission-vision :$about />  --}}
<x-gap/>
{{--  <x-chairman-desk :$about />  --}}
{{-- <x-gap/> --}}
{{-- <div class="ui-background">
    <x-awards/>

</div> --}}

<x-gap/>
{{--  <x-about-star :$about />  --}}
<x-gap/>

<div class="ui-background">
    {{--  <x-locations :content="$about" :locations='$branches'/>  --}}

</div>
<x-gap/>

{{--  <x-gallery/>  --}}
<x-gap/>

<div class="ui-background">
    {{--  <x-faqs :content="$about" :$faqs/>  --}}


</div>
{{-- <x-gap/> --}}
@endsection
