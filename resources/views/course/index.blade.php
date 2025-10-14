@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Courses Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">Add New</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course_Name</th>
                                    <th>Syllabus</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->course_name }}</td>
                                    <td>{{ $item->syllabus }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>
                                        <a href="{{ url('/courses/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm">View</button></a>
                                        <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm">Edit</button></a>

                                        <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                        </form>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
@endsection