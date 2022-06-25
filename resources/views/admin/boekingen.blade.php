<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Bookings</h1>
        <h3 class="adminSubTitle">All bookings are stated here</h3>
    </div>
    <div class="adminUsersCon">
        <div class="usersCon">
            <div class="usersColumns">
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">ID</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">User-ID</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Trip-ID</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Delete</h3>
                </div>
            </div>
            <div class="userItemsCon">
                @foreach ($boekingen as $boeking)
                <div class="userItemCon">
                    <div class="userInfoCon">
                        <p>{{ $boeking->booking_id }}</p>
                    </div>
                    <div class="userInfoCon">
                        <p>{{ $boeking->user_id }} </p>
                    </div>
                    <div class="userInfoCon">
                        <p>{{ $boeking->trip_id }}</p>
                    </div>
                    <div class="userInfoCon">
                        <form action=""{{ route('admin.boekingen.delete', $boeking->booking_id) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button class="SgeneralButton" type="submit" onclick="return confirm('Are you sure you want to delete this user?')"><a>Delete</a></button>
                        </form>
                    </div>
                </div>
                @endforeach   
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin') }}">Back</a>
    </button>   
</div>


