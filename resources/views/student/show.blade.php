@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Page </h2>
    </div>
    <div class="card-body">
        <h5 class=card-title>Name : {{ $student->name }}</h5>
        <p class="card-text">Email : {{ $student->email }}</p>  
        <p class="card-text">Phone : {{ $student->phone }}</p>
        <p class="card-text">Address : {{ $student->address }}</p>
        <a href="{{ url('/students') }}" title="Back"><button class="btn btn-warning btn-sm">Back</button></a>
    </div>
</div>

@endsection