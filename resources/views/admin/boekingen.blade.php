@foreach ($boekingen as $boeking)
    <p>ID: {{ $boeking->booking_id }} User ID: {{ $boeking->user_id }} Trip ID: {{ $boeking->trip_id }}</p>
@endforeach