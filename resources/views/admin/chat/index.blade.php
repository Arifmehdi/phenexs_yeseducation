@extends('admin.master')

@section('title') Admin Dashboard | Chat List @endsection
@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        All Conversations
                    </h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Conversations</div>
                                <div class="card-body">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">User/Guest</th>
                                                <th scope="col">Admin Assigned</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Last Message</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($conversations as $conversation)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>
                                                        @if($conversation->user)
                                                            {{ $conversation->user->name }} (User)
                                                        @elseif($conversation->guest_id)
                                                            Guest ({{ $conversation->guest_id }})
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($conversation->admin)
                                                            {{ $conversation->admin->name }}
                                                        @else
                                                            Unassigned
                                                        @endif
                                                    </td>
                                                    <td>{{ $conversation->status }}</td>
                                                    <td>
                                                        @if($conversation->messages->isNotEmpty())
                                                            {{ Str::limit($conversation->messages->last()->body, 50) }}
                                                        @else
                                                            No messages yet
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.chats.show', $conversation->id) }}" class="btn btn-info">View Chat</a>
                                                        @if($conversation->status == 'open')
                                                            <form action="{{ route('admin.chats.close', $conversation->id) }}" method="POST" style="display:inline-block;">
                                                                @csrf
                                                                <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure you want to close this conversation?')">Close</button>
                                                            </form>
                                                        @endif
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
            </div>
        </div>
    </div>
@endsection