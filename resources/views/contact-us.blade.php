@extends('layout.main')
@section('content')
<x-banner :imgurl='$about->banner_desktop' :text="''"/>
<x-gap/>
<x-contact-us/>
<x-gap/>
<x-gap/>
<x-find-us :$branches />
<x-gap/>
<x-gap/>
<x-faqs :$about :$faqs/>
{{-- <x-gap/> --}}
<div style="height:3em"></div>
@endsection
