@extends('admin.master')

@section('title')
    Create Intake Course | {{ env('APP_NAME') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Intake Course</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('intake-courses.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Intake Course Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
