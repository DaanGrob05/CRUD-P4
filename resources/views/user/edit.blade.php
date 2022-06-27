<x-nav
    id="blueNav">
</x-nav>
<div class="reviewSpacer">
    <div class="reviewCon">
        <div class="reviewForms">
            <div class="reviewHeader">
                    <h1>Edit Profile</h1>
            </div>
            <div class="reviewFormCon">
                <form action="{{ route('profile.update')}}"" method="post">
                @csrf
                @method('PUT')
                    <div class="reviewFormItem">
                        <x-trip-input
                            class="reviewFormItemInput"
                            label="Name: "
                            field="name"
                            name="name"
                            value="{{ Auth::user()->name }}"
                        ></x-trip-input>
                    </div>
                    <div class="reviewFormItem">
                        <x-trip-input
                            class="reviewFormItemInput"
                            label="Email: "
                            field="email"
                            name="email"
                            value="{{ Auth::user()->email }}"
                        ></x-trip-input>
                    </div>
                    <div class="reviewFormItem">
                        <x-trip-input
                            class="reviewFormItemInput"
                            label="Password: "
                            field="password"
                            name="password"
                            type="password"
                        ></x-trip-input>
                    </div>
                    <div class="loginButtonCon">
                        <button class="loginButton">
                            <a>Submit</a>
                        </button>
                    </div>
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('profile') }}">Back</a>
    </button>   
    
</div>
<x-footer></x-footer>






{{-- <form action="{{ route('profile.update')}}" method="POST">
    @csrf
    

    <div class="">
        <x-general-input
            label="Name"
            field="name"
            name="name"
            value="{{ Auth::user()->name }}"
        ></x-general-input>
    </div>

    <div class="">
        <x-general-input
            label="Email"
            field="email"
            name="email"
            value="{{ Auth::user()->email }}"
        ></x-general-input>
    </div>


    <div class="">
        <x-general-input
            label="Password"
            field="password"
            name="password"
            type="password"
        ></x-general-input>
    </div>
    <button type="submit">Update</button>
</form> --}}