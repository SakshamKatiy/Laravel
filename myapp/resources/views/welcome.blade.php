
@extends('layouts.slide')
@push('title')
<title>Welcome</title>
@endpush
@section('main-section')

    <h1> My name is Saksham</h1>
<a href="{{route('mypost')}}">Post page</a>
<a href="/about">about page</a>


@endsection
