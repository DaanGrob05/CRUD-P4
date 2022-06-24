<x-nav
    id="blueNav">
</x-nav>

<form action="{{ route('admin.users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')

    {{-- Name --}}
    <div class="">
        <x-trip-input
            label="Name"
            type="text"
            name="name"
            field="name"
            :value="@old('name', $user->name)"
        ></x-trip-input>
    </div>
    {{-- Email --}}
    <div class="">
        <x-trip-input
            label="Email"
            type="text"
            name="email"
            field="email"
            :value="@old('email', $user->email)"
        ></x-trip-input>
    </div>
    {{-- Password --}}
    <div class="">
        <x-trip-input
            label="Password"
            type="password"
            name="password"
            field="password"
            :value="@old('password', $user->password)"
        ></x-trip-input>
    </div>
    <button type="submit">Submit</button>
</form>