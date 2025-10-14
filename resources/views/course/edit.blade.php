@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        Courses Page
    </div>
    <div class="card-body">
        <form action="{{ url('courses/' .$course->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label>COURSE NAME</label></br>
            <input type="text" name="course_name" id="course_name" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>

@endsection
