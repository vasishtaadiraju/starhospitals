@extends('layout.main')
@section('css')
    @vite(['resources/scss/find-doctor.scss', 'resources/js/find-doctor.js'])
@endsection
@section('meta-title',"Trusted Doctors Near You at STAR Hospitals in Hyderabad")
@section('meta-description',"Book an appointment with our expert and leading doctors at STAR Hospitals for exceptional medical diagnosis and treatment.")

@section('content')
<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a >Terms & Conditions</a>
</div>
<x-gap/>
<div class="find-doctor-specialists">
    <x-doctors :type="'flex'" :$branches  :$coes :title="'Book an Appointment'" :description="'Our healthcare specialists are equipped with the knowledge and skills to provide you with the support you require. From consultation to diagnosis to treatments, our experts are dedicated to helping you.'"/>
</div>
<x-gap/>
@endsection