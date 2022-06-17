<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Noto+Sans:ital,wght@1,700&family=Open+Sans:ital,wght@1,500&family=Playfair+Display:ital,wght@1,900&family=Roboto&display=swap"
        rel="stylesheet"
        />
        <title> {{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased">
        <div class="tripsspacer">
            <x-nav
                id="blueNav">
            </x-nav>
            <div class="searchSpacer">
                <div class="searchTitleCon">
                    <a class="searchFormTitle">Search by destination</a>
                </div>
                <div class="searchCon">                
                    <form class="searchForm" action="#" method="GET">
                        <input class="searchInput" type="text" name="search" placeholder="Search">
                        <button class="searchButton" type="submit">
                            <a class="buttonA">search</a>
                        </button>
                    </form> 
                </div>
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
        </div>
    </body>
</html>

{{-- @forelse ($trips as $trip)
<a href="{{ route('reizen.show', $trip->trip_id) }}">
    <p>{{ $trip->description }}</p>
</a>
@empty
<p>Er zijn geen reizen gevonden.</p>
@endforelse --}}