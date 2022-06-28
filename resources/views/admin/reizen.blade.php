<x-nav
    id="blueNav">
</x-nav>


<div class="adminTripsSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Trips overview</h1>
        <h3 class="adminSubTitle">all info about trip is stated here</h3>
    </div>
    <div class="createTripCon">
        <button class="generalButton"><a  href="{{ route('reizen.create') }}">Create new Trip</a></button>
    </div>
    <div class="tripsCon">
        @forelse ($trips as $trip)
        
            <div class="tripConAdmin">
                <div class="tripInfo">
                    <div class="tripName">
                        <p>{{ $trip->trip_name }}</p>
                    </div>
                    <div class="tripDescription">
                        <p>{{ $trip->full_description }}</p>
                    </div>
                    <div class="tripDescription">
                        <p>{{ $trip->small_description }}</p>
                    </div>
                    <div class="tripDate">
                        <p>{{ $trip->startDate }} / {{ $trip->endDate }}</p>
                    </div>
                    <div class="moreInfo">
                        <p>{{ $trip->start_location }} / {{ $trip->destination }}</p>
                    </div>
                    <div class="moreInfo">
                        <p>type of trip: {{ $trip->type_of_trip }}</p>
                    </div>
                    <div class="moreInfo">
                        <p>{{ $trip->hotel }}</p>
                    </div>
                    <div class="moreInfo">
                        <p class="tripPrice">€{{ $trip->price }},-</p>
                    </div>
                    

                    <div class="moreInfo">
                        <button class="generalButton">
                            <a  href="{{ route('reizen.edit', $trip->trip_id) }}">Edit</a>
                        </button>
                        <form action="{{ route('reizen.destroy', $trip->trip_id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="generalButton" onclick="return confirm('Weet je zeker dat je deze reis wilt verwijderen?')">
                               <a>Delete</a> 
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
        <p>No Trips</p>
        @endforelse
    </div>  
    <button class="generalButton">
        <a  href="{{ route('admin') }}">back</a>
    </button>  
</div>
