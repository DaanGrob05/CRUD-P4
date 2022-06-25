
<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Create</h1>
        <h3 class="adminSubTitle">Make a brand new trip here</h3>
    </div>
    <div class="adminFormCon">
        <div class="adminForm">
            <form action="{{ route('reizen.store') }}" method="post">
                @csrf
                {{-- tripname --}}
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
                {{-- start location --}}
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
                {{-- type_of_trip --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">type of trip</label>
                    <x-trip-input 
                        class="adminInput"
                        type="number"
                        name="type_of_trip"
                        field="type_of_trip"
                        :value="@old('type_of_trip', $trip->type_of_trip)"
                    ></x-trip-input>
                </div>
                {{-- destination --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">destination</label>
                    <x-trip-input 
                        class="adminInput"
                        type="text"
                        name="destination"
                        field="destination"
                        :value="@old('destination', $trip->destination)"
                    ></x-trip-input>
                </div>
                {{-- start date --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">S Date</label>
                    <x-trip-input 
                        class="adminInput"
                        type="date"
                        name="startDate"
                        field="startDate"
                        :value="@old('startDate', $trip->startDate)"
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
                        :value="@old('endDate', $trip->endDate)"
                    ></x-trip-input>
                </div>
                {{-- price --}}
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

                {{-- small description --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">S description</label>
                    <x-trip-input 
                        class="adminInput"
                        type="text"
                        name="small_description"
                        field="small_description"                      
                        :value="@old('small_description', $trip->small_description)"
                    ></x-trip-input>
                </div>
                {{-- full description --}}
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
                {{-- hotel --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">Hotel</label>
                    <x-trip-input 
                        class="adminInput"
                        type="text"
                        name="hotel"
                        field="hotel"
                        :value="@old('hotel', $trip->hotel)"
                    ></x-trip-input>
                </div>
                {{-- image --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">Image</label>
                    <x-trip-input 
                        class="adminInput"
                        type="file"
                        name="image"
                        field="image"
                        :value="@old('image', $trip->image)"
                    ></x-trip-input>
                </div>

                <button class="generalButton" type="submit"><a>Create</a></button>
            </form>
        </div>
    </div>     
    <button class="generalButton">
        <a  href="{{ route('admin.reizen') }}">Back</a>
    </button>   
</div>