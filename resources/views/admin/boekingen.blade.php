<x-nav
    id="blueNav">
</x-nav>

@foreach ($boekingen as $boeking)
    <a href="{{ route('admin.boekingen.show', $boeking->booking_id) }}">
        <p>ID: {{ $boeking->booking_id }} User ID: {{ $boeking->user_id }} Trip ID: {{ $boeking->trip_id }}</p>
    </a>
@endforeach

