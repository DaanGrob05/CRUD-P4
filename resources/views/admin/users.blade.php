<x-nav
    id="blueNav">
</x-nav>

@foreach ($users as $user)
    <div class="">
        <a href="{{ route('admin.users.show', $user->id) }}">
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
            <br>    
        </a>
    </div>
@endforeach