<x-nav></x-nav>

<form action="{{ route('reizen.store') }}" method="post">
    @csrf

    {{-- Beschrijving --}}
    <div class="">
        <x-trip-input 
            type="text"
            name="description"
            field="description"
            label="Beschrijving"
            :value="@old('description', $trip->description)"
        ></x-trip-input>
    </div>
    {{-- Prijs --}}
    <div class="">
        <x-trip-input 
            type="number"
            name="price"
            field="price"
            label="Prijs"
            :value="@old('price', $trip->price)"
        ></x-trip-input>
    </div>
    {{-- Hotel --}}
    <div class="">
        <x-trip-input 
            type="text"
            name="hotel"
            field="hotel"
            label="Hotel"
            :value="@old('price', $trip->hotel)"
        ></x-trip-input>
    </div>
    {{-- Foto --}}
    <div class="">
        <x-trip-input 
            type="file"
            name="image"
            label="Foto"
            field="image"
            :value="@old('price', $trip->image)"
        ></x-trip-input>
    </div>
    {{-- Start Datum --}}
    <div class="">
        <x-trip-input 
            type="date"
            name="start_date"
            label="Start Datum"
            field="start_date"
            :value="@old('price', $trip->startDate)"
        ></x-trip-input>
    </div>
    {{-- Start Datum --}}
    <div class="">
        <x-trip-input 
            type="date"
            name="end_date"
            label="Eind Datum"
            field="end_date"
            :value="@old('price', $trip->endDate)"
        ></x-trip-input>
    </div>
    <button type="submit">Aanmaken</button>
</form>