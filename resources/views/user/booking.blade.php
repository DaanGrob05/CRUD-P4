<x-nav
    id="blueNav">
</x-nav>

<h1>{{ $trip->trip_name }}</h1>
<h2>{{ $trip->full_description }}</h2>
<br>
<h3>De rest van alle info die nodig is</h3>

{{-- Delete button --}}
<form action="{{ route('profile.bookings.delete', $booking->booking_id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel</button>
</form>