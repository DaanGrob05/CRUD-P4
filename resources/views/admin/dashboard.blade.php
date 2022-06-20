<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminCon">
        <div class="adminItem">
            <a href="{{ route('admin.reizen') }}">Manage all trips</a>
        </div>
        <div class="adminItem">
            <a href="{{ route('admin.boekingen') }}">Manage all bookings</a>
        </div>
        <div class="adminItem">
            <a href="{{ route('admin.users') }}">Manage all users</a>
        </div>

        
    </div>
    <div class="logoutCon">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}

            </x-dropdown-link>
        </form>
     </div>
</div>