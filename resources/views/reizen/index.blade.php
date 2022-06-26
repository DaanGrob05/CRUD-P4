
<x-nav
    id="blueNav">
</x-nav>
<div class="tripsSpacer">
        <div class="searchSpacer">
            <div class="searchTitleCon">
                <a class="searchFormTitle">Search by destination</a>
            </div>
            <div class="searchCon">                
                <form class="searchForm" action="" method="GET">
                    <input class="searchInput" type="text" name="name" placeholder="Search">
                    <button class="searchButton" type="submit">
                        <a class="buttonA">search</a>
                    </button>
                </form> 
            </div>
        </div>
        <div class="allTripsSpacer">
            <div class="tripsCon">
                @forelse ($trips as $trip)
                
                    <div class="tripCon">
                            <div class="tripImageCon">
                                <img class="tripImage" src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" alt="">
                            </div>
                            <div class="tripInfo">
                                <div class="tripName">
                                    <p>{{ $trip->trip_name }}</p>
                                </div>
                                <div class="tripDescription">
                                    <p>{{ $trip->small_description }}</p>
                                </div>
                                <div class="tripDate">
                                    <p>{{ $trip->startDate }} - {{ $trip->endDate }}</p>
                                </div>
                                <div class="moreInfo">
                                    <p class="tripPrice">€{{ $trip->price }},-</p>
                                    <button class="moreInfoButton">
                                        <a class="moreInfoA" href="{{ route('reizen.show', $trip->trip_id) }}">more info</a>
                                    </button>
                                </div>
                            </div>
                        
                    </div>
                @empty
                <p>Er zijn geen reizen gevonden.</p>
                @endforelse
            </div>

            {{-- Knop om terug naar boven te gaan --}}

        </div> 
        <div class="buttonSpacer">
            <button class="generalButton" id="toTopButton" title="Go to top"><a>Back To Top</a></button>
        </div>           
        
        <x-footer></x-footer>

        <script type="text/javascript" src="{{ asset('js/to_top_button.js') }}"></script>
</div> 