@extends('layout.main')
@section('css')
    @vite(['resources/scss/branch.scss', 'resources/js/specialists.js'])
@endsection
@section('meta-title',$content->meta_title)
@section('meta-description',$content->meta_description)
@section('content')
    <x-banner :imgurl="config('variables.asset') . $content->banner_desktop" :text="$content->banner_title" :$breadcrum />
    <div class="ui-background">
        <x-doctors :type="'flex'" :$branches :$coes :title="$content->our_specialist_title" :description="$content->our_specialist_text" />
    </div>
    @if ($content->description != null)
    <x-gap />
    <x-about-speciality :$content />   
    @endif
    
    @if (count($content->testimonials) > 0)
    <x-gap />
    <div class="ui-background">
        {{-- <x-testimonials :$content  :testimonials='$content->testimonials'/> --}}
        {{-- <x-testimonials-secondary :$content   :testimonials='$content->testimonials'/> --}}
        <x-heading :title="'Reviews From Our Patients'" :description="$content->reviews_text" />

        <div class="t-sec testimonials-slider" id="patient-reviews">
            @foreach ($content->testimonials as $item)
                @if ($item->doctor_video == 'no')
                    <div class="t-sec__card">
                        <svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.125 0.0625L39.3125 2.875C37.2708 4.66667 35.6042 6.39583 34.3125 8.0625C33.0625 9.6875 32.2708 10.9167 31.9375 11.75C31.6042 12.5833 31.2917 13.5833 31 14.75L31.25 15.125C34.0417 15.125 36.0833 15.7292 37.375 16.9375C38.6667 18.1458 39.3125 20.0208 39.3125 22.5625C39.3125 24.5208 38.6042 26.2917 37.1875 27.875C35.8125 29.4583 34.0833 30.25 32 30.25C29.625 30.25 27.6458 29.5833 26.0625 28.25C24.4792 26.9167 23.6875 24.7708 23.6875 21.8125C23.6875 17.8958 24.8958 13.8542 27.3125 9.6875C29.7708 5.47917 32.7083 2.27083 36.125 0.0625ZM12.9375 0.0625L16.125 2.875C14.0833 4.66667 12.4375 6.375 11.1875 8C9.9375 9.625 9.125 10.875 8.75 11.75C8.41667 12.625 8.10417 13.625 7.8125 14.75L8.0625 15.125C10.8542 15.125 12.8958 15.7292 14.1875 16.9375C15.4792 18.1458 16.125 20.0208 16.125 22.5625C16.125 24.5208 15.4167 26.2917 14 27.875C12.625 29.4583 10.8958 30.25 8.8125 30.25C6.4375 30.25 4.45833 29.5833 2.875 28.25C1.29167 26.9167 0.5 24.7708 0.5 21.8125C0.5 17.8958 1.70833 13.8542 4.125 9.6875C6.58333 5.47917 9.52083 2.27083 12.9375 0.0625Z"
                                fill="#004E9E" />
                        </svg>


                        <p class="t-sec__card__name">{{ $item->patient_name }}</p>
                        <p class="t-sec__card__text">{{ $item->text }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <x-gap />
    <x-heading :title="'From Our Doctors'" :description="$content->doctors_text" />

    <div class="t-sec testimonials-slider" id="patient-reviews">
        @foreach ($content->testimonials as $item)
            @if ($item->doctor_video == 'yes')
                <div class="t-sec__card">
                    <svg width="40" height="31" viewBox="0 0 40 31" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M36.125 0.0625L39.3125 2.875C37.2708 4.66667 35.6042 6.39583 34.3125 8.0625C33.0625 9.6875 32.2708 10.9167 31.9375 11.75C31.6042 12.5833 31.2917 13.5833 31 14.75L31.25 15.125C34.0417 15.125 36.0833 15.7292 37.375 16.9375C38.6667 18.1458 39.3125 20.0208 39.3125 22.5625C39.3125 24.5208 38.6042 26.2917 37.1875 27.875C35.8125 29.4583 34.0833 30.25 32 30.25C29.625 30.25 27.6458 29.5833 26.0625 28.25C24.4792 26.9167 23.6875 24.7708 23.6875 21.8125C23.6875 17.8958 24.8958 13.8542 27.3125 9.6875C29.7708 5.47917 32.7083 2.27083 36.125 0.0625ZM12.9375 0.0625L16.125 2.875C14.0833 4.66667 12.4375 6.375 11.1875 8C9.9375 9.625 9.125 10.875 8.75 11.75C8.41667 12.625 8.10417 13.625 7.8125 14.75L8.0625 15.125C10.8542 15.125 12.8958 15.7292 14.1875 16.9375C15.4792 18.1458 16.125 20.0208 16.125 22.5625C16.125 24.5208 15.4167 26.2917 14 27.875C12.625 29.4583 10.8958 30.25 8.8125 30.25C6.4375 30.25 4.45833 29.5833 2.875 28.25C1.29167 26.9167 0.5 24.7708 0.5 21.8125C0.5 17.8958 1.70833 13.8542 4.125 9.6875C6.58333 5.47917 9.52083 2.27083 12.9375 0.0625Z"
                            fill="#004E9E" />
                    </svg>


                    <p class="t-sec__card__name">{{ $item->patient_name }}</p>
                    <p class="t-sec__card__text">{{ $item->text }}</p>
                </div>
            @endif
        @endforeach
    </div>
    {{-- <x-gap />   --}}
    @endif
    
    {{-- <x-gap/>
<x-blogs :$content :blogs='$content->blogs'/>  --}}
    @if (count($content->faqs) > 0)
    <x-gap />
    {{-- <div class="ui-background"> --}}
    <x-faqs :$content :faqs="$content->faqs" />  
    @endif
    
    {{-- </div> --}}

    <x-gap />
@endsection
