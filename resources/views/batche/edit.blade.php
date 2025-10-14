@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        Batch Page
    </div>
    <div class="card-body">
        <form action="{{ url('batches/' .$batch->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label>BATCH NAME</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Course Name</label></br>
            <input type="text" name="course_id" id="course_id" class="form-control"></br>
            <label>Start Date</label></br>
            <input type="date" name="start_date" id="start_date" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>

@endsection
