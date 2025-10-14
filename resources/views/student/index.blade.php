@extends('layout')
@section('content')

            <div class="card">
                <div class="card-header">
                    <h2>Student Applicatiopn</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">Add New</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm">View</button></a>
                                        <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm">Edit</button></a>

                                        <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                        </form>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
@endsection