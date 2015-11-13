@extends('layouts.master')

@section('title', 'MainPage')
@section('description', 'MainPage')
@section('keywords', 'MainPage')

@section('content')

    <div class="container">
        <h1>Hello World</h1>

        <p>
            This view is loaded from module: {!! config('portfolio.name') !!}
        </p>
    </div>

@stop