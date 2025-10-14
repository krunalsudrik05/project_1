@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Enrollment Page</h2>
    </div>
    <div class="card-body">
        <h5 class=card-title>Enrollment No : {{ $enrollment->enrollment_no }}</h5>
        <p class="card-text">Batch : {{ $enrollment->batch_id }}</p>  
        <p class="card-text"> Student : {{ $enrollment->student_id }}</p>
        <p class="card-text"> Join Date : {{ $enrollment->join_date }}</p>
        <p class="card-text"> Fees : {{ $enrollment->fee }}</p>
        <a href="{{ url('/enrollments') }}" title="Back"><button class="btn btn-warning btn-sm">Back</button></a>
    </div>
</div>

@endsection