@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        Enrollment Page
    </div>
    <div class="card-body">
        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <label>Enrollment No</label></br>
            <input type="text" name="enrollment_no" id="enrollment_no" class="form-control"></br>
            <label>Batch</label></br>
            <select class="form-control" name="batch_id" id="batch_id">
                @foreach($batches as $id=>$name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select></br>
            <label>Student</label></br>
            <select class="form-control" name="student_id" id="student_id">
                @foreach($students as $id=>$name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select></br>
            <label>Join Date</label></br>
            <input type="date" name="join_date" id="join_date" class="form-control"></br>
            <label>Fees</label></br>
            <input type="text" name="fee" id="fee" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@endsection