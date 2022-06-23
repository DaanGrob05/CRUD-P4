<x-nav
    id="blueNav">
</x-nav>

<form action="{{ route('profile.update')}}" method="POST">
    @csrf
    @method('PUT')

    <div class="">
        <x-general-input
            label="Name"
            field="name"
            name="name"
            value="{{ Auth::user()->name }}"
        ></x-general-input>
    </div>

    <div class="">
        <x-general-input
            label="Email"
            field="email"
            name="email"
            value="{{ Auth::user()->email }}"
        ></x-general-input>
    </div>

    <div class="">
        <x-general-input
            label="Password"
            field="password"
            name="password"
            type="password"
        ></x-general-input>
    </div>
    <button type="submit">Update</button>
</form>