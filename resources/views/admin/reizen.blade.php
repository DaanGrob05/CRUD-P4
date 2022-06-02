<h1>Admin Reizen Pagina</h1>

@forelse ($trips as $trip)
<a href="{{ route('admin.reizen.show', $trip->trip_id) }}">
    <p>{{ $trip->description }}</p>
</a>
@empty
<p>Er zijn geen reizen gevonden.</p>
@endforelse