<x-nav
    id="blueNav">
</x-nav>

<h1>Beschrijving</h1>
<h2>{{ $trip->description }}</h2>

@csrf
<a href="{{ route('reizen.boek', ['trip_id' => $trip->trip_id]) }}"><p>Reis Boeken</p></a>

<a href="{{ route('reizen.recension', ['trip_id' => $trip->trip_id]) }}"><p>Recensie Schrijven</p></a>