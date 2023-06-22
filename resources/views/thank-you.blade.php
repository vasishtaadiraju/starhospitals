@extends('layout.main')
@section('css')
    @vite(['resources/scss/thankyou.scss', 'resources/js/app.js'])
@endsection
@section('content')
<x-gap/>
<div class="thankyou">
    <h1>Booking Confirmed!</h1>
    <p>Thank you for...</p>
    <div>
        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2480_2)">
            <path d="M100 200C155.228 200 200 155.228 200 100C200 44.7715 155.228 0 100 0C44.7715 0 0 44.7715 0 100C0 155.228 44.7715 200 100 200Z" fill="#32BA7C"/>
            <path d="M74.4492 145.111L125.869 196.53C168.456 185.174 200.001 146.372 200.001 100C200.001 99.0537 200.001 98.1074 200.001 97.161L159.623 59.937L74.4492 145.111Z" fill="#0AA06E"/>
            <path d="M102.525 122.397C106.942 126.814 106.942 134.385 102.525 138.801L93.3768 147.949C88.9604 152.366 81.3895 152.366 76.973 147.949L36.91 107.571C32.4936 103.154 32.4936 95.5835 36.91 91.1671L46.0582 82.0188C50.4746 77.6024 58.0456 77.6024 62.462 82.0188L102.525 122.397Z" fill="white"/>
            <path d="M137.541 52.6814C141.957 48.265 149.528 48.265 153.945 52.6814L163.093 61.8297C167.51 66.2461 167.51 73.8171 163.093 78.2335L93.6925 147.319C89.2761 151.735 81.7051 151.735 77.2887 147.319L68.1404 138.17C63.724 133.754 63.724 126.183 68.1404 121.767L137.541 52.6814Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_2480_2">
            <rect width="200" height="200" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            
    </div>
    <p class="thankyou__description">
        Lorem ipsum dolor sit amet consectetur. Purus a eu in condimentum sed bibendum orci et dignissim. Neque lectus amet posuere est porttitor. Elementum lectus rutrum ac semper.
    </p>
</div>
@endsection
