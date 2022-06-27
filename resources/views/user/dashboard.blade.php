<x-nav
    id="blueNav">
</x-nav>
<div class="userProfileSpacer">
    <div class="userProfileContentSpacer">
        <div class="userProfileTitle">

            <h1>Hello {{ Auth::user()->name }}</h1>
        </div>
        <div class="userItem">
            
            <div class="">
                    <a href="{{ route('profile.bookings') }}">Bookings</a>
                </div>
        </div>
        <div class="userItem">
            <div class="">
                <a href="{{ route('profile.edit') }}">Edit Profile Information</a>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</div>
<x-footer></x-footer>

