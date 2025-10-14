@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Batch Page</h2>
    </div>
    <div class="card-body">
        <h5 class=card-title>Batch Name : {{ $batch->name }}</h5>
        <p class="card-text">Course Name : {{ $batch->course->course_name }}</p>  
        <p class="card-text">Start Date : {{ $batch->start_date }}</p>
        <a href="{{ url('/batches') }}" title="Back"><button class="btn btn-warning btn-sm">Back</button></a>
    </div>
</div>

@endsection