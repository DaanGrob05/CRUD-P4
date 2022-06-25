<x-nav
    id="blueNav">
</x-nav>

<h1>Beschrijving</h1>
<h2>{{ $trip->description }}</h2>

@csrf
    <a href="{{ route('reizen.boek', ['trip_id' => $trip->trip_id]) }}">Reis Boeken</a>
