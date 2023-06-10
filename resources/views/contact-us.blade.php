@extends('layout.main')
@section('css')
@vite(['resources/scss/contact.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="Vite::asset('resources/images/banner/contact-us.png')" :text="''" :$breadcrum/>

<div class="ui-background">

<x-contact-us/>
</div>
<x-gap/>
<x-gap/>
<x-find-us :$branches />
<x-gap/>
<x-gap/>
<div class="ui-background">

<x-faqs :$about :$faqs/>
</div>
{{-- <x-gap/> --}}

@endsection
