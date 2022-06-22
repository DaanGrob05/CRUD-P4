<x-nav
    id="blueNav">
</x-nav>

<h1>Name</h1>
<p>{{ $user->name }}</p>

<h2>Email</h2>
<p>{{ $user->email }}</p>

<a href="{{ route('admin.users.edit', $user->id) }}">

    <button type="submit">
        Edit
    </button>
</a>

{{-- Delete --}}
<form action="{{ route('admin.users.delete', $user->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')"">Delete</button>
</form>