<x-nav
    id="blueNav">
</x-nav>
<div class="showTripSpacer">
     
        
    <div class="tripShowCon">
       <div class="tripShowTitleCon">
            <h1 class="tripShowTitle">{{ $trip->trip_name }}</h1>
        </div>
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
                
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitleCon">
                    <h3 class="tripShowInfoTitle">Description</h3>
                </div>
                <div class="tripShowInfoDescription">
                    <p class="tripShowInfoContent">{{ $trip->full_description }}</p>
                </div>
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitleCon">
                    <h3 class="tripShowInfoTitle">Destination</h3>
                </div>
                <div class="tripShowInfoContentCon">
                    <p class="tripShowInfoContent">{{ $trip->start_location }} / {{ $trip->destination}}</p>
                </div>
            </div>
            <div class="tripShowInfo">
                <div class="tripShowInfoTitleCon">
                    <h3 class="tripShowInfoTitle">Price</h3>
                </div>
                <div class="tripShowInfoContentCon">
                    <p class="tripShowInfoPriceContent">€{{ $trip->price }},-</p>
                </div>
            </div>
            <div class="tripShowInfo" id="tripShowInfoRow">
                <div class="tripShowInfoContentCon">
                @csrf
                    <button class="generalButton">
                        <a href="{{ route('reizen.boek', ['trip_id' => $trip->trip_id]) }}">Reis Boeken</a>
                    </button>
                </div>
                <div class="tripShowInfoContentCon">
                    @csrf
                    <button class="generalButton">
                        <a href="{{ route('reizen.review', ['trip_id' => $trip->trip_id]) }}">Review</a>

                    </button>
                </div>

                
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('reizen.index') }}">Back</a>
    </button>   
</div>
<x-footer></x-footer>