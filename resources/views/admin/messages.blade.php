<x-nav
    id="blueNav">
</x-nav>

@forelse ($messages as $message)
    <div class="">
        <a href="{{ route('admin.messages.show', $message->id) }}">
            <p>{{ $message->name }}</p>
            <p>{{ $message->message }}</p>
            <br>    
        </a>
    </div>
@empty
    <p>No messages yet</p>
@endforelse