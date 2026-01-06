@extends('admin.master')

@section('title')
    Edit Intake | {{ env('APP_NAME') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Intake</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('intakes.update', $intake->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Intake Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $intake->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
