<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<x-auth-card>
    <x-slot name="logo">
        {{-- <a href="/">
            <x-application-logo class="" />
        </a> --}}
    </x-slot>
    
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="" :errors="$errors" />
    
    <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Address -->
            <div class="">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
                {{-- bestand van x-input staat in views/auth/input.blade.php --}}
            </div>

            <!-- Password -->
            <div class="">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

