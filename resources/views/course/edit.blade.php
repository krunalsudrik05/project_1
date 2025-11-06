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
            <input type="hidden" name="id" id="id" value="{{ $course->id }}" />
            <label>COURSE NAME</label></br>
            <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" class="form-control" value="{{ $course->syllabus }}"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control" value="{{ $course->duration }}"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>

@endsection
