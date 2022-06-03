@forelse ($trips as $trip)
<a href="{{ route('reizen.show', $trip->trip_id) }}">
    <p>{{ $trip->description }}</p>
</a>
@empty
<p>Er zijn geen reizen gevonden.</p>
@endforelse