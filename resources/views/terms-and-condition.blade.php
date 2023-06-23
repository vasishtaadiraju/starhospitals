@extends('layout.main')
@section('css')
    @vite(['resources/scss/thankyou.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-banner :imgurl="Vite::asset('resources/images/banner/t&c.png')" :text="'Terms & Conditions | Star Hospitals'" :$breadcrum />  
@endsection
