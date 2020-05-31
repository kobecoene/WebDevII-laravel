@extends('layout')


@section('content')
<h1>{{ $title }}</h1>

<p> {{ $content }}</p>

<img class="mockup_image img" src="{{ asset($image) }}" alt="mockup">
@endsection
