@extends('admin.master')

@section('title')
    Edit Intake Course | {{ env('APP_NAME') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Intake Course</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('intake-courses.update', $intakeCourse->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Intake Course Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $intakeCourse->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
