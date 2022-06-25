<x-nav
    id="blueNav">
</x-nav>
<div class="showTripSpacer">
     <div class="tripShowTitleCon">
            <h1 class="tripShowTitle">{{ $trip->trip_name }}</h1>
        </div>
        
    <div class="tripShowCon">
       
        <div class="tripShowInfoCon">
            <div class="tripShowImageCon">
                <img class="tripShowImage" src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" alt="">
                <img class="tripShowImage" src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" alt="">
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitle">
                    <h2 class="tripShowInfoTitle">Details</h2>
                </div>
                
                <div class="tripShowInfoDate">
                    <p class="tripShowInfoDate">{{ $trip->startDate }} / {{ $trip->endDate }}</p>
                </div>
                <div class="tripShowInfoPrice">
                    <p class="tripShowInfoPrice">€{{ $trip->price }},-</p>
                </div>
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitle">
                    <h3 class="tripShowInfoTitle">Description</h3>
                </div>
                <div class="tripShowInfoDescription">
                    <p class="tripShowInfoDescription">{{ $trip->full_description }}</p>
                </div>
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitle">
                    <h3 class="tripShowInfoTitle">Location</h3>
                </div>
                <div class="tripShowInfoDescription">
                    <p class="tripShowInfoDescription">{{ $trip->location }}</p>
                </div>
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfo">
            </div>
        </div>
    </div>
    
</div>
<x-footer></x-footer>
{{-- <h1>Beschrijving</h1>
<h2>{{ $trip->description }}</h2> --}}

{{-- @csrf
    <a href="{{ route('reizen.boek', ['trip_id' => $trip->trip_id]) }}">Reis Boeken</a>
@csrf
<a href="{{ route('reizen.review', ['trip_id' => $trip->trip_id]) }}">Review</a> --}}
