@extends('layouts.app')

@section('title', 'Comics')  

@section('content')
    @foreach ($fumetti as $fumetto)
        <img src=" {{$fumetto['thumb']}}">
        {{ $fumetto['series'] }}
        <br/>
    @endforeach
@endsection
