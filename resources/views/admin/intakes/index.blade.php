@extends('admin.master')

@section('title')
    Manage Intakes | {{ env('APP_NAME') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">All Intakes</h4>
                    <a href="{{ route('intakes.create') }}" class="btn btn-primary btn-sm ml-auto">Add Intake</a>
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
                                @foreach($intakes as $intake)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $intake->name }}</td>
                                        <td>
                                            <a href="{{ route('intakes.edit', $intake->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('intakes.destroy', $intake->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this intake?')">Delete</button>
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
