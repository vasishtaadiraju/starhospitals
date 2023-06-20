@extends('layout.main')
@section('css')
@vite(['resources/scss/homepage.scss', 'resources/js/home.js'])
@endsection
@section('content')
<x-slider :$content/>
<x-search-doctor :$branches :$coes/>


<x-highlights/>

<x-gap/>
{{-- <div class="ui-background"> --}}

{{-- </div> --}}
{{-- <x-gap/> --}}

<x-about-coe  :$coes/>

<x-gap/>
<x-our-specialists :$content :$branches  :$coes/>
{{-- <x-gap/> --}}

<x-gap/>
<x-why-choose-us :$content/>

<x-gap/>
{{-- <x-gap/> --}}

<x-about-us :$content/>
<x-gap/>
{{-- <x-testimonials :$content  :testimonials='$reviews'/> --}}
<x-testimonials-secondary :$content  :testimonials='$reviews'/>

{{-- <x-gap/> --}}
{{-- 
<div class="ui-background">

<x-blogs :$content :$blogs/>
</div>
<x-gap/>
<x-media :$content :$media /> --}}
<x-gap/>
<x-consultation-request/>
@endsection


    {{-- "$page_content->id"
"$page_content->banner1_desktop"
"$page_content->banner1_mobile"
"$page_content->banner1_alt"
"$page_content->banner1_title"
"$page_content->banner1_description"
"$page_content->banner1_cta"


public $id;
public $banner1_desktop;
public $banner1_mobile;
public $banner1_alt;
public $banner1_title;
public $banner1_description;
public $banner1_cta;

$this->id = $id;
$this->banner1_desktop = $banner1_desktop;
$this->banner1_mobile = $banner1_mobile;
$this->banner1_alt = $banner1_alt;
$this->banner1_title = $banner1_title;
$this->banner1_description = $banner1_description;
$this->banner1_cta = $banner1_cta;
 , $id , $banner1_desktop , $banner1_mobile , $banner1_alt , $banner1_title , $banner1_description , $banner1_cta; --}}
