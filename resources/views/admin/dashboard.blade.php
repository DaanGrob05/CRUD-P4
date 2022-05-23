<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

<p><a href="{{ route('admin.reizen') }}">Bekijk alle reizen</a></p>
<p><a href="{{ route('admin.users') }}">Bekijk alle gebruikers</a></p>