@extends('layouts.app')

@section('pages')
<h1>Category</h1>
<a href="{{ route('home') }}">Home</a><br>
<ul>
    <li><a href="{{ route('html') }}">Html</a></li>
    <li><a href="{{ route('css') }}">Css</a></li>
    <li><a href="{{ route('php') }}">PHP</a></li>
    <li><a href="{{ route('javaScript') }}">JavaScript</a></li>
</ul>
@endsection
