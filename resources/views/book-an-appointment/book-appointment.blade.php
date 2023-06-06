@extends('layout.main')
@section('content')
<x-gap/>
<x-doctors :type="'flex'" :$branches  :$coes/>
<x-gap/>
@endsection