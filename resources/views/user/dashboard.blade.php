{{-- use Illuminate\Support\Facades\DB; --}}
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
                        <div class="userProfileDetailTitle">
                            <h3>Name</h3>
                        </div>
                        <div class="userProfileDetail">
                            <p>{{ Auth::user()->name }} Sins</p>
                        </div>
                    </div>
                    <div class="userProfileDetailCon">
                        <div class="userProfileDetailTitle">
                            <h3>Email</h3>
                        </div>
                        <div class="userProfileDetail">
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="userProfileDetailCon">
                        <div class="userProfileDetailTitle">
                            <h3>Phone</h3>
                        </div>
                        <div class="userProfileDetail">
                            <p>{{ Auth::user()->phone }}</p>
                        </div>
                    </div>
                    <div class="userProfileDetailCon">
                        <div class="userProfileDetailTitle">
                            <h3>Address</h3>
                        </div>
                        <div class="userProfileDetail">
                            <p>{{ Auth::user()->address }}</p>
                        </div>
                    </div>
                    <div class="userProfileDetailCon">
                        <div class="">
                            <button class="generalButton">
                                <a href="{{ route('profile.edit', ['id' => Auth::user()->id]) }}">Edit Profile</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="userActionsShow">
                <div class="bookingsCon">
                    <div class="bookingsTitle">
                        <h2>Your Bookings</h2>
                    </div>
                    <div class="bookingsBody">
                    

                        @forelse ($bookings as $booking)
                            @php
                                $trip = DB::table('trips')->where('trip_id', $booking->trip_id)->first();
                            @endphp
                            <a href="{{ route('reizen.show', $trip->trip_id) }}" >
                                {{ $trip->trip_name }}
                            </a>
                            <form action="{{ route('profile.bookings.delete', $booking->booking_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="SgeneralButton" type="submit" onclick="return confirm('Are you sure you want to cancel this booking?')"><a>Cancel</a></button>
                            </form>

                        @empty
                            <p>You have no bookings</p>
                        @endforelse
                    </div>
                </div>
                <div class="reviewsCon">
                    <div class="reviewsTitle">
                        <h2>Your Reviews</h2>
                    </div>
                    <div class="reviewsBody">
                        @forelse ($reviews as $review)
                            <a>{{ $review->title }}</a>
                            <div class="SgeneralButton">
                                {{-- <a href="{{ route('reviews.delete', $review->review_id) }}">Delete</a> --}}
                                <a>Delete</a>
                            </div>
                                @empty
                                    <p>No reviews yet</p>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="generalButton " href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
           <a> {{ __('Log Out') }} </a>     
        </button>

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