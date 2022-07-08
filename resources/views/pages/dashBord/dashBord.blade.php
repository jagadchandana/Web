
@extends('layouts.app')
@section('pages')
    <h1>DashBord</h1>
    <a href="{{ route('home') }}">Home</a><br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Content
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="{{ route('setting') }}">Setting</a></li>
        <li><a class="dropdown-item" href="{{ route('task') }}">Task</a></li>
        <li><a class="dropdown-item" href="{{  route('schedule') }}">Schedule</a></li>
        <li><a class="dropdown-item" href="{{ route('calender') }}">Calender</a></li>

        </ul>
    </div>
@endsection
