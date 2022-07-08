@extends('layouts.app')
@section('pages')
    <h1>Project</h1>
    <a href="{{ route('home') }}"">Home</a>
    <ul>
        <li><a href="{{ route('angular') }}">Angular</a></li>
        <li><a href="{{ route('laravel') }}">Laravel</a></li>
    </ul>
@endsection
