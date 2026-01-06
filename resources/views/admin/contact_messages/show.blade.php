@extends('admin.master')
@section('title', 'Admin Dashboard | Contact Message Details')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact Message Details</h3>
                            <div class="card-tools">
                                <a href="{{ route('contact-messages.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $contactMessage->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $contactMessage->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $contactMessage->email }}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{ $contactMessage->subject }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $contactMessage->message }}</td>
                                </tr>
                                <tr>
                                    <th>Received At</th>
                                    <td>{{ $contactMessage->created_at->format('d M, Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Last Updated At</th>
                                    <td>{{ $contactMessage->updated_at->format('d M, Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
