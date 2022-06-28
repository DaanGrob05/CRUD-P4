<x-nav
    id="blueNav">
</x-nav>

<p>ID: {{ $boeking->booking_id }} User ID: {{ $boeking->user_id }} Trip ID: {{ $boeking->trip_id }}</p>

<form action="{{ route('admin.boekingen.delete', $boeking->booking_id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="" onclick="return confirm('Are you sure you want to delete this booking?')">Delete Booking</button>
</form>