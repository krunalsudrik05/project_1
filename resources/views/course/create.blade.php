@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        Student Page
    </div>
    <div class="card-body">
        <form action="{{ url('courses') }}" method="post">
            {!! csrf_field() !!}
            <label>COURSE NAME</label></br>
            <input type="text" name="course_name" id="course_name" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@endsection