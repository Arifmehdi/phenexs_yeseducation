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
                                            <th>SL</th>
                                            <th>Actions</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Nationality</th>
                                            <th>Study Level</th>
                                            <th>Submitted At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $key => $application)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink{{ $application->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $application->id }}">
                                                            <a class="dropdown-item" href="{{ route('applications.show', $application->id) }}"><i class="fa fa-eye"></i> View</a>
                                                            <form action="{{ route('applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                                                <td>{{ $application->email }}</td>
                                                <td>{{ $application->phone_number }}</td>
                                                <td>{{ $application->nationality }}</td>
                                                <td>{{ $application->preferred_study_level }}</td>
                                                <td>{{ $application->created_at->format('d M, Y h:i A') }}</td>

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
