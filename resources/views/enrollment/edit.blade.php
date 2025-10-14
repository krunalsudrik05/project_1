@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        Enrollment Page
    </div>
    <div class="card-body">
        <form action="{{ url('enrollments/' .$enrollment->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label>Enrollment No</label></br>
            <input type="text" name="enrollment_no" id="enrollment_no" class="form-control"></br>
            <label>Batch</label></br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
            <label>Student</label></br>
            <input type="text" name="student_id" id="student_id" class="form-control"></br>
            <label>Join Date</label></br>
            <input type="date" name="join_date" id="join_date" class="form-control"></br>
            <label>Fees</label></br>
            <input type="text" name="fee" id="fee" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>

@endsection
