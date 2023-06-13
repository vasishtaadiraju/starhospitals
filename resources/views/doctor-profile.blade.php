@extends('layout.main')
@section('css')
@vite(['resources/scss/doctor-profile.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="Vite::asset('resources/images/banner/doc-profile.png')" :text="''" :$breadcrum/>

<x-gap/>

<x-doctor-page-info/>

@endsection