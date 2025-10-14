@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Teacher Page </h2>
    </div>
    <div class="card-body">
        <h5 class=card-title>Name : {{ $teacher->name }}</h5>
        <p class="card-text">Email : {{ $teacher->email }}</p>  
        <p class="card-text">Phone : {{ $teacher->phone }}</p>
        <p class="card-text">Address : {{ $teacher->address }}</p>
        <a href="{{ url('/teachers') }}" title="Back"><button class="btn btn-warning btn-sm">Back</button></a>
    </div>
</div>

@endsection