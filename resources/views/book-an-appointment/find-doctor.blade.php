@extends('layout.main')
@section('css')
    @vite(['resources/scss/find-doctor.scss', 'resources/js/app-book.js'])
@endsection
@section('content')
<x-gap/>
<x-doctors :type="'flex'" :$branches  :$coes/>
<x-gap/>
@endsection