<x-nav
    id="blueNav">
</x-nav>

@foreach ($bookings as $booking)
@php
$trip = DB::table('trips')->where('trip_id', $booking->trip_id)->first()
@endphp
<a href="{{ route('profile.bookings.show', $booking->booking_id) }}">
    <h1>{{ $trip->trip_name }}</h1>
    <p>{{ $trip->full_description }}</p>
</a>
@endforeach