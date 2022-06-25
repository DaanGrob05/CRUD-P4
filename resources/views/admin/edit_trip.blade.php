<x-nav
    id="blueNav">
</x-nav>

{{-- Edit --}}
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Edit</h1>
        <h3 class="adminSubTitle">Change the properties of trips here</h3>
    </div>
    <div class="adminFormCon">
        <div class="adminForm">
            <form action="{{ route('reizen.update', $trip->trip_id) }}" method="post">
            @csrf
            @method('PUT')
            {{-- Name --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Name</label>
                <x-trip-input 
                    class="adminInput"
                    type="text"
                    name="trip_name"
                    field="trip_name"
                    :value="@old('trip_name', $trip->trip_name)"
                ></x-trip-input>
            </div>
            {{-- type of trip --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Type of trip</label>
                <x-trip-input 
                class="adminInput"
                    type="number"
                    name="type_of_trip"
                    field="type_of_trip"
                    :value="@old('type_of_trip', $trip->type_of_trip)"
                ></x-trip-input>
            </div>
            {{-- discription --}}
            <div class="adminInput_Label">
                <label class="adminLabel">S Description</label>
                <x-trip-input 

                    class="adminInput"
                    type="text"
                    name="small_description"
                    field="small_description"
                    :value="@old('small_description', $trip->small_description)"
                ></x-trip-input>
            </div>
            <div class="adminInput_Label">
                <label class="adminLabel">F Description</label>
                <x-trip-input 
                    class="adminInput"
                    type="text"
                    name="full_description"
                    field="full_description"
                    :value="@old('full_description', $trip->full_description)"
                ></x-trip-input>
            </div>
            {{-- location --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Location</label>
                <x-trip-input 
                    class="adminInput"
                    type="text"
                    name="start_location"
                    field="start_location"
                    :value="@old('start_location', $trip->start_location)"
                ></x-trip-input>
            </div>
            {{-- destination --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Destination</label>
                <x-trip-input 
                    class="adminInput"
                    type="text"
                    name="destination"
                    field="destination"
                    :value="@old('destination', $trip->destination)"
                ></x-trip-input>
            </div>
            {{-- Prijs --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Price</label>
                <x-trip-input 
                    class="adminInput"
                    type="number"
                    name="price"
                    field="price"
                    :value="@old('price', $trip->price)"
                ></x-trip-input>
            </div>
            {{-- Hotel --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Hotel</label>
                <x-trip-input 
                    class="adminInput"
                    type="text"
                    name="hotel"
                    field="hotel"
                    :value="@old('price', $trip->hotel)"
                ></x-trip-input>
            </div>
            {{-- photo --}}
            <div class="adminInput_Label">
                <label class="adminLabel">Photo</label>
                <x-trip-input 
                    class="adminInput"
                    type="file"
                    name="image"
                    field="image"
                    :value="@old('price', $trip->image)"
                ></x-trip-input>
            </div>
            {{-- Start date --}}
            <div class="adminInput_Label">
                <label class="adminLabel">S Date</label>
                <x-trip-input 
                    class="adminInput"
                    type="date"
                    name="startdDate"
                    field="startDate"
                    :value="@old('price', $trip->startDate)"
                ></x-trip-input>
            </div>
            {{-- end date --}}
            <div class="adminInput_Label">
                <label class="adminLabel">E Date</label>
                <x-trip-input 
                    class="adminInput"
                    type="date"
                    name="endDate"
                    field="endDate"
                    :value="@old('price', $trip->endDate)"
                ></x-trip-input>
            </div>
            <button class="generalButton" type="submit"><a>Edit</a></button>
        </form>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin.reizen') }}">back</a>
    </button>
</div>
        