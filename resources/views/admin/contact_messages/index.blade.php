@extends('admin.master')
@section('title', 'Admin Dashboard | All Contact Messages')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Contact Messages</h3>
                        </div>
                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive data-container">
                                <table id="example1" class="table table-sm table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="20">SL</th>
                                            <th width="100">Action</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            {{--<th>Subject</th> --}}
                                            <th>Message</th>
                                            <th>Received At</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($messages as $key => $message)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{ route('contact-messages.show', $message->id) }}"><i class="fa fa-eye"></i> Show</a>
                                                            <form action="{{ route('contact-messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $message->full_name }}</td>
                                                <td>{{ $message->email }}</td>
                                                {{--<td>{{ $message->subject }}</td> --}}
                                                <td>{{ Str::limit($message->message, 50) }}</td>
                                                <td>{{ $message->created_at->format('d M, Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="m-4">
                                    {{ $messages->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
