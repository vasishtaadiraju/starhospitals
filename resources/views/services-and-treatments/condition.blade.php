@extends('layout.main')
@section('css')
    @vite(['resources/scss/condition.scss', 'resources/js/condition.js'])
@endsection
@section('content')
    {{-- <x-banner/> --}}
<x-banner :imgurl="'condition'" :text="$content->name" :$breadcrum/>

    <x-gap />
    <div class="condition-tabs condition-tabs-slider ">
        @php
            $slug = "";
        @endphp
        {{-- @if ($content->symptoms_causes != null)
            <a href="{{ route('condition', $content->symptoms_causes_slug) }}"
                class="condition-tabs__wrapper @if ($content->type == 'symptoms') condition-tabs__wrapper--active @endif ">Symptoms
                & Causes</a>

                @php
                $slug = $content->symptoms_causes_slug;
                    
                @endphp
        @endif --}}
        @if ($content->diagnosis_treatment != null)
            <a href="{{ route('condition', $content->diagnosis_treatment_slug) }}"
                class="condition-tabs__wrapper @if ($content->type == 'diagnosis') condition-tabs__wrapper--active @endif ">Overview</a>
                @php
                $slug = $content->diagnosis_treatment_slug;
                    
                @endphp
        @endif

        {{-- <a href="#" class="condition-tabs__wrapper">Diagnosis & Treatment</a> --}}
        
            <a href="{{ route('department',$content->doctors_departments_slug) }}"
                class="condition-tabs__wrapper @if ($content->type == 'department') condition-tabs__wrapper--active @endif">Doctors
                & Departments</a>
        
        @if ($content->care_at_star_hospitals != null)
            <a href="{{ route('care', $content->care_at_star_hospitals_slug) }}"
                class="condition-tabs__wrapper @if ($content->type == 'care') condition-tabs__wrapper--active @endif">Care
                at Star Hospitals</a>
                @php
                $slug = $content->symptoms_causes_slug;
                    
                @endphp
        @endif
    </div>  
    <x-gap />
    @if ($content->type != 'department')
    


    <x-conditions-image-slider />
    <x-gap /> 
    <div class="conditions-content">

        @if ($content->type == 'symptoms')
            {!! $content->symptoms_causes !!}
        @endif
        @if ($content->type == 'diagnosis')
            {!! $content->diagnosis_treatment !!}
        @endif
        @if ($content->type == 'care')
            {!! $content->care_at_star_hospitals !!}
        @endif
    </div>

    @else
    <x-doctors :type="'flex'" :$branches  :$coes/>
    <x-gap/>
<x-faqs :$content :faqs='$faqs'/> 

    @endif
    
    <x-gap/>
    <input type="hidden" id="condition-value" name="" value="{{$content->id}}">
    
@endsection
