<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Noto+Sans:ital,wght@1,700&family=Open+Sans:ital,wght@1,500&family=Playfair+Display:ital,wght@1,900&family=Roboto&display=swap"
        rel="stylesheet"
        />
        <title> {{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    </head>

{{-- <x-auth-card>
    <x-slot name="logo">
        {{-- <a href="/">
            <x-application-logo class="" />
        </a> --}}
    {{-- </x-slot> --}}
    
    <!-- Session Status -->
    {{-- <x-auth-session-status class="" :status="session('status')" /> --}}

    <!-- Validation Errors -->
    {{-- <x-auth-validation-errors class="" :errors="$errors" /> --}}
    <body>
        <div class="registerSpacer">
            <x-nav
                id="blueNav">
            </x-nav>
            <div class="registerCon">
              <div class="registerForms">
                    <div class="registerHeader">
                            <h1>Register into Unified</h1>
                    </div>
                    <div class="registerFormCon">
                        
                        <form class="registerForm" action="{{ route('register') }}" method="POST">
                            @csrf

                            {{-- name --}}
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput" type="text" name="name" :value="old('name')" required autofocus />
                                <x-label class="textLabel" for="name" :value="__('Name')" />
                                <div class="bar" id="generalBar"></div>
                            </div>

                            <!-- Email Address -->
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput" type="email" name="email" :value="old('email')" required />
                                
                                <x-label class="textLabel" for="email" :value="__('Email')" />
                                <div class="bar" id="generalBar"></div>
                                {{-- bestand van x-input staat in views/auth/input.blade.php --}}
                            </div>
                            
                            <!-- Password -->
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                <x-label class="textLabel" for="password" :value="__('Password')" />
                                <div class="bar" id="generalBar"></div>
                            </div>

                            <!-- Password Confirm-->
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput"
                                                type="password"
                                                name="password_confirmation"
                                                required />
                                <x-label class="textLabel" for="password_confirmation" :value="__('Confirm Password')" />
                                <div class="bar" id="generalBar"></div>
                            </div>

                            {{-- button --}}
                            <div class="registerButtonCon">
                                <x-button class="registerButton">
                                    {{ __('register') }}
                                </x-button>
                                {{-- <button type="button" class="registerButton"> <a href="">register</a></button> --}}
                            </div>
                            {{-- already registerd --}}
                            <div class="forgot-register-Con">
                                <a class="" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 
    {{-- </x-auth-card>
</x-guest-layout> --}}
