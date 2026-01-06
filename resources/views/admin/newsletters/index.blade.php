@extends('admin.master')
@section('title', 'Admin Dashboard | All Newsletter Subscriptions')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Newsletter Subscriptions</h3>
                        </div>
                        <div class="card-body p-0 mb-0">
                            <div class="table-responsive data-container">
                                <table id="example1" class="table table-sm table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="20">SL</th>
                                            <th width="100">Action</th>
                                            <th>Email</th>
                                            <th>Subscribed At</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($newsletters as $key => $newsletter)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink{{ $newsletter->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $newsletter->id }}">
                                                            <form action="{{ route('newsletters.destroy', $newsletter->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this subscription?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $newsletter->email }}</td>
                                                <td>{{ $newsletter->created_at->format('d M, Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="m-4">
                                    {{ $newsletters->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
