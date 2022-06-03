<h1>Beschrijving</h1>
<h2>{{ $trip->description }}</h2>

<a href="{{ route('reizen.edit', $trip->trip_id) }}">Pas Aan</a>

<form action="{{ route('reizen.destroy', $trip->trip_id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="" onclick="return confirm('Weet je zeker dat je deze reis wilt verwijderen?')">Verwijder Reis</button>
</form>