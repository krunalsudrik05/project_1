@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        Batch Page
    </div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="post">
            {!! csrf_field() !!}
            <label>BATCH NAME</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Course Name</label></br>
            <select class="form-control" name="course_id" id="course_id">
                @foreach($courses as $id=>$course_name)
                <option value="{{$id}}">{{$course_name}}</option>
                @endforeach
            </select></br>
            <label>Start Date</label></br>
            <input type="date" name="start_date" id="start_date" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@endsection