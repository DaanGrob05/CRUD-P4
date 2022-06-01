@forelse ($trips as $trip)
<p>{{ $trip->description }}</p>
{{-- <a href="{{ route('reizen.show', $trip) }}">{{ $trip->description }}</a> --}}
@empty
<p>Er zijn geen reizen gevonden.</p>
@endforelse