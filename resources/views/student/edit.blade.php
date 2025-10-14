@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        Student Page
    </div>
    <div class="card-body">
        <form action="{{ url('students/' .$student->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $student->id }}" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{ $student->email }}" class="form-control"></br>
            <label>Phone</label></br>
            <input type="text" name="phone" id="phone" value="{{ $student->phone }}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>

@endsection
