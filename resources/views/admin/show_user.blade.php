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
