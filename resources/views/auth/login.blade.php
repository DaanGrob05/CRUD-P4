<link rel="stylesheet" href="{{ asset('css/app.css') }}">

{{-- <x-auth-card> --}}
    {{-- <x-slot name="logo"> --}}
        {{-- <a href="/">
            <x-application-logo class="" />
        </a> --}}
    {{-- </x-slot> --}}
    
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="" :errors="$errors" />

    <body>
        <div class="loginSpacer">
            <x-nav
                id="blueNav">
            </x-nav>

            <div class="loginCon">
                <div class="loginForms">
                      <div class="loginHeader">
                              <h1>Sign in</h1>
                      </div>
                        <div class="loginFormCon">
                            <form class="loginForm" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <!-- Email Address -->
                                <div class="group emailGroup" id="loginFormGroup">

                                    <x-input id="generalTextInput" class="textInput" type="email" name="email" :value="old('email')" required autofocus />
                                    
                                    <x-label class="textLabel" for="email" :value="__('Email')" />
                                    <div class="bar" id="generalBar"></div>
                                    {{-- bestand van x-input staat in views/auth/input.blade.php --}}
                                </div>
                    
                                <!-- Password -->
                                <div class="group emailGroup" id="loginFormGroup">
                                    <x-input id="generalTextInput" class="textInput"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                    <x-label class="textLabel" for="password" :value="__('Password')" />
                                    <div class="bar" id="generalBar"></div>
                                </div>
                                
                                <div class="loginButtonCon">
                                    <x-button class="loginButton">
                                        {{-- {{ __('Log in') }} --}}
                                        <a >Sign in</a>
                                    </x-button>
                                </div>
                                <!-- Remember Me -->
                                <div class="rememberMeCon">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                    
                                {{-- Forgot Password --}}
                                <div class="forgot-register-Con">
                                    <div class="forgotPass">
                                       @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="registerCon">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                            {{ __("Don't have an account?") }}
                                        </a>
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        
    {{-- </x-auth-card> --}}
    
</body>