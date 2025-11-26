@extends('admin.master')
@section('title', 'Admin Dashboard | Consultation Requests')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Consultation Requests</h3>
                        </div>
                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Country</th>
                                            <th>Study Level</th>
                                            <th>WhatsApp</th>
                                            <th>Received At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($consultations as $consultation)
                                            <tr>
                                                <td>{{ $consultation->id }}</td>
                                                <td>{{ $consultation->first_name }} {{ $consultation->last_name }}</td>
                                                <td>{{ $consultation->email }}</td>
                                                <td>{{ $consultation->mobile }}</td>
                                                <td>{{ $consultation->country_of_residence }}</td>
                                                <td>{{ $consultation->preferred_study_level }}</td>
                                                <td>{{ $consultation->whatsapp ? 'Yes' : 'No' }}</td>
                                                <td>{{ $consultation->created_at->format('d M, Y h:i A') }}</td>
                                                <td>
                                                    <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-info btn-sm">View</a>
                                                    <form action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this consultation request?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{ $consultations->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
