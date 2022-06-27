<x-nav
    id="blueNav">
</x-nav>
<div class="userProfileSpacer">
    <div class="userProfileContentSpacer">
        <div class="userProfileTitle">
            <h1>Hello {{ Auth::user()->name }}</h1>
        </div>
        <div class="userProfileContentCon">
            <div class="userProfileInfo">
                <div class="userProfileInfoTitle">
                    <h2>Your Profile</h2>
                </div>
                <div class="userProfileBody">
                    <div class="userProfileDetailCon">
                        <div class="userProfile">
                            <h3>Name</h3>
                        </div>
                        <div class="userProfile">
                            <p>{{ Auth::user()->name }} Sins</p>
                        </div>
                    </div>
                    <div class="userProfile">
                        <div class="userProfile">
                            <h3>Email</h3>
                        </div>
                        <div class="userProfile">
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
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

{{-- <div class="userItem">
            
            <div class="">
                    <a href="{{ route('profile.bookings') }}">Bookings</a>
                </div>
        </div>
        <div class="userItem">
            <div class="">
                <a href="{{ route('profile.edit') }}">Edit Profile Information</a>
            </div>
        </div> --}}