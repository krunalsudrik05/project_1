@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Course Page </h2>
    </div>
    <div class="card-body">
        <h5 class=card-title>Course_Name : {{ $course->course_name }}</h5>
        <p class="card-text">Syllabus : {{ $course->syllabus }}</p>  
        <p class="card-text">Duration : {{ $course->duration }}</p>
        <a href="{{ url('/courses') }}" title="Back"><button class="btn btn-warning btn-sm">Back</button></a>
    </div>
</div>

@endsection