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
        <div class="adminItem">
            <a href="{{ route('admin.reviews') }}">Manage all reviews</a>
        </div>
        <div class="adminItem">
            <a href="{{ route('admin.messages') }}">Manage all messages</a>
        </div>  
    </div>
    <div class="logoutCon">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="generalButton " href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
               <a> {{ __('Log Out') }} </a>
            </button>

        </form>
     </div>
</div>
