@extends('admin.master')

@section('title') Admin Dashboard | Chat List @endsection
@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        Conversation with
                        @if($conversation->user)
                            {{ $conversation->user->name }}
                        @elseif($conversation->guest_id)
                            Guest ({{ $conversation->guest_id }})
                        @else
                            N/A
                        @endif
                        (Status: {{ $conversation->status }})
                    </h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Messages</div>
                                <div class="card-body chat-body" id="chatBody" style="height: 400px; overflow-y: scroll;">
                                    @foreach($conversation->messages as $message)
                                        <p>
                                            <strong>{{ $message->user ? $message->user->name : 'Guest' }}:</strong>
                                            {{ $message->body }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    <input type="text" id="adminChatInput" class="form-control" placeholder="Type your message...">
                                    <button class="btn btn-primary mt-2" onclick="sendAdminMessage()">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dependencies for Chat -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.js"></script>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    
    if (typeof axios === 'undefined' || typeof Pusher === 'undefined' || typeof Echo === 'undefined') {
        console.error("Chat Error: A required library (axios, Pusher, or Echo) is not loaded.");
        return;
    }

    // Axios configuration
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (csrfToken) {
         axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
    }
     axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


    // Echo configuration
    const echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env('PUSHER_APP_KEY') }}',
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        forceTLS: true,
        authEndpoint: '/broadcasting/auth'
    });

    const conversationId = {{ $conversation->id }};
    const chatBody = document.getElementById('chatBody');
    const adminChatInput = document.getElementById('adminChatInput');
    const sendButton = document.querySelector('.card-footer .btn-primary');


    function appendMessage(message) {
        const msgElement = document.createElement('p');
        let senderName = 'Guest';
        let senderId = message.user ? message.user.id : null;
        
        // Check if the message is from the currently authenticated admin
        if(senderId === {{ auth()->id() }}){
            senderName = 'You (Admin)';
        } else if (message.user) {
            senderName = message.user.name; // A different user/admin
        } else {
            // A guest user
             senderName = `Guest ({{ $conversation->guest_id }})`;
        }

        msgElement.innerHTML = `<strong>${senderName}:</strong> ${message.body}`;
        chatBody.appendChild(msgElement);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    echo.private(`chat.${conversationId}`)
        .listen('.message.sent', (e) => {
            // Check if message is from the other user before appending
            if(e.message.user_id !== {{ auth()->id() }}) {
                appendMessage(e.message);
            }
        });

    async function sendAdminMessage() {
        const messageBody = adminChatInput.value.trim();
        if (messageBody === "") return;

        // Optimistic UI update
        const tempMessage = {
            body: messageBody,
            user: { id: {{ auth()->id() }} }
        };
        appendMessage(tempMessage);
        adminChatInput.value = "";

        try {
            await axios.post(`/admin/chats/${conversationId}/reply`, {
                body: messageBody
            });
        } catch (error) {
            console.error("Error sending admin message:", error);
            alert("Failed to send message. Please try again.");
            chatBody.lastChild.innerText += ' (failed)';
        }
    };

    sendButton.removeAttribute('onclick'); // Remove old inline handler
    sendButton.addEventListener('click', sendAdminMessage);

    adminChatInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendAdminMessage();
        }
    });

    chatBody.scrollTop = chatBody.scrollHeight; // Scroll to bottom on load
});
</script>
@endpush
@endsection