<x-nav
    id="blueNav">
</x-nav>

<h1>Name</h1>
<p>{{ $message->name }}</p>

<h2>Message</h2>
<p>{{ $message->message }}</p>

<h3>Email</h3>
<p>{{ $message->email }}</p>

{{-- Delete --}}
<form action="{{ route('admin.messages.delete', $message->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>