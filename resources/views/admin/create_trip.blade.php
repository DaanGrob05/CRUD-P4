<div class="adminSpacer">
<x-nav
    id="blueNav">
</x-nav>

<form action="{{ route('reizen.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- tripname --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="trip_name"
            field="trip_name"
            label="trip name"
            :value="@old('trip_name', $trip->trip_name)"
        ></x-trip-input>
    </div>
    {{-- start location --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="start_location"
            field="start_location"
            label="start location"
            :value="@old('start_location', $trip->start_location)"
        ></x-trip-input>
    </div>
    {{-- type_of_trip --}}
    <div class="createFormItem">
        <x-trip-input 
            type="number"
            name="type_of_trip"
            field="type_of_trip"
            label="type of trip"
            :value="@old('type_of_trip', $trip->type_of_trip)"
        ></x-trip-input>
    </div>
    {{-- destination --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="destination"
            field="destination"
            label="destination"
            :value="@old('destination', $trip->destination)"
        ></x-trip-input>
    </div>
    {{-- start date --}}
    <div class="createFormItem">
        <x-trip-input 
            type="date"
            name="startDate"
            field="startDate"
            label="start date"
            :value="@old('startDate', $trip->startDate)"
        ></x-trip-input>
    </div>
    {{-- end date --}}
    <div class="createFormItem">
        <x-trip-input 
            type="date"
            name="endDate"
            field="endDate"
            label="end date"
            :value="@old('endDate', $trip->endDate)"
        ></x-trip-input>
    </div>
    {{-- price --}}
    <div class="createFormItem">
        <x-trip-input 
            type="number"
            name="price"
            field="price"
            label="price"
            :value="@old('price', $trip->price)"
        ></x-trip-input>
    </div>

    {{-- small description --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="small_description"
            field="small_description"
            label="Small Description"
            :value="@old('small_description', $trip->small_description)"
        ></x-trip-input>
    </div>
    {{-- full description --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="full_description"
            field="full_description"
            label="Full Description"
            :value="@old('full_description', $trip->full_description)"
        ></x-trip-input>
    </div>
    {{-- hotel --}}
    <div class="createFormItem">
        <x-trip-input 
            type="text"
            name="hotel"
            field="hotel"
            label="Hotel"
            :value="@old('hotel', $trip->hotel)"
        ></x-trip-input>
    </div>
    {{-- image --}}
    <div class="createFormItem">
        <x-trip-input 
            type="file"
            name="image"
            field="image"
            label="Image"
            :value="@old('image', $trip->image)"
        ></x-trip-input>
    </div>

    <button type="submit">Aanmaken</button>
</form>
</div>