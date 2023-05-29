@extends('layout.main')
@section('content')
<x-banner/>
<x-gap/>
<x-mission-vision/>
<x-gap/>
<x-chairman-desk/>
{{-- <x-gap/> --}}
<div class="ui-background">
    <x-awards/>

</div>

<x-gap/>
<x-about-star/>
<x-gap/>

<div class="ui-background">
    <x-locations/>

</div>
<x-gap/>

<x-gallery/>
<x-gap/>

<div class="ui-background">
    <x-faqs/>


</div>
{{-- <x-gap/> --}}
@endsection