@extends('admin.master')

@section('title')
    Manage Intake Courses | {{ env('APP_NAME') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">All Intake Courses</h4>
                    <a href="{{ route('intake-courses.create') }}" class="btn btn-primary btn-sm ml-auto">Add Intake Course</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($intakeCourses as $intakeCourse)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $intakeCourse->name }}</td>
                                        <td>
                                            <a href="{{ route('intake-courses.edit', $intakeCourse->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('intake-courses.destroy', $intakeCourse->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this intake course?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
