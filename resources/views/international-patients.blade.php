@extends('layout.main')
@section('content')
<x-banner :imgurl="config('variables.asset') .$content->banner_desktop" :text="$content->banner_text"/>
<x-int-highlight :$content/>
<x-gap/>
<x-key-services/>
 <x-gap/>
{{--<x-int-reviews/> --}}
<x-virtual-tour :$content />
<x-gap/>
<x-facilities :$content />
<x-gap/>
<x-int-enquiry-form :$content />
<x-gap/>
@endsection
