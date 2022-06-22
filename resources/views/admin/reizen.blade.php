<x-nav
    id="blueNav">
</x-nav>

<h1>Admin Reizen Pagina</h1>

<button><a href="{{ route('reizen.create') }}">Nieuwe reis aanmaken</a></button>

@forelse ($trips as $trip)
<a href="{{ route('admin.reizen.show', $trip->trip_id) }}">
    <p>{{ $trip->small_description }}</p>
</a>
@empty
<p>Er zijn geen reizen gevonden.</p>
@endforelse