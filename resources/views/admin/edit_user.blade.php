<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Edit</h1>
        <h3 class="adminSubTitle">Change the properties of users here</h3>
    </div>
    <div class="adminFormCon">
        <div class="adminForm">
            <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">Name</label>
                    <x-trip-input 
                        class="adminInput"
                        label=""
                        type="text"
                        name="name"
                        field="name"
                        :value="@old('name', $user->name)"
                    ></x-trip-input>
                </div>
                {{-- Email --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">Email</label>
                    <x-trip-input 
                        class="adminInput"
                        label=""
                        type="text"
                        name="email"
                        field="email"
                        :value="@old('email', $user->email)"
                    ></x-trip-input>
                </div>
                {{-- Password --}}
                <div class="adminInput_Label">
                    <label class="adminLabel">Password</label>
                    <x-trip-input 
                        class="adminInput"
                        label=""
                        type="password"
                        name="password"
                        field="password"
                        :value="@old('password', $user->password)"
                    ></x-trip-input>
                </div>
                <button class="generalButton" type="submit"><a>Submit</a></button>
            </form>
        </div>
    </div>     
    <button class="generalButton">
        <a  href="{{ route('admin.users') }}">Back</a>
    </button>   
</div>




