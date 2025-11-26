@extends('admin.master')
@section('title', 'Admin Dashboard | Application Forms')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Application Forms</h3>
                        </div>
                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Nationality</th>
                                            <th>Study Level</th>
                                            <th>Submitted At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $application)
                                            <tr>
                                                <td>{{ $application->id }}</td>
                                                <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                                                <td>{{ $application->email }}</td>
                                                <td>{{ $application->phone_number }}</td>
                                                <td>{{ $application->nationality }}</td>
                                                <td>{{ $application->preferred_study_level }}</td>
                                                <td>{{ $application->created_at->format('d M, Y h:i A') }}</td>
                                                <td>
                                                    <a href="{{ route('applications.show', $application->id) }}" class="btn btn-info btn-sm">View</a>
                                                    <form action="{{ route('applications.destroy', $application->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this application?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{ $applications->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
