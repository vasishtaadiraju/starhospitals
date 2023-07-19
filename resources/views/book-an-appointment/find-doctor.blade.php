@extends('layout.main')
@section('css')
    @vite(['resources/scss/find-doctor.scss', 'resources/js/find-doctor.js'])
@endsection
@section('content')
<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a >Terms & Conditions</a>
</div>
<x-gap/>
<x-doctors :type="'flex'" :$branches  :$coes :title="'Book An Appointment'" :description="''"/>
<x-gap/>
@endsection