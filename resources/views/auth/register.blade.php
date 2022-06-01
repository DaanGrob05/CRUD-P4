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
            <nav id="blueNav">
                <div class="userItemsCon">
                    <div class="unifiedLogo">
                        <a>unified</a>
                        {{-- plane icon needs to be added img on ivan's laptop(downloads) --}}
                    </div>
                    <div class="userEmptySpace">

                    </div>
                    <div class="userItem">
                        {{-- href to search page --}}
                        <a>Search</a>
                    </div>
                    <div class="userItem">
                        @if(Auth::check())
                        <a href="{{ route('home') }}">Profile</a>
                        @else
                        <a href="{{ route('login') }}">sign in</a>
                        @endif
                    </div>
                    <div class="userItem">
                        {{-- shoppingcart icon needs to be added --}}
                        <a>s</a>
                    </div>
                </div>
                <div class="navItemsCon">
                    <div class="navEmptySpace">
                    </div>
                    <div class="navItem">
                        {{-- <a href="{{ route('book') }}">book</a> --}}
                        <a>book</a>
                    </div>
                    <div class="navItem">
                        {{-- <a href="{{ route('myTrips') }}">about</a> --}}
                        <a>my trips</a>
                    </div>
                    <div class="navItem">
                        {{-- <a href="{{ route('about') }}">About</a> --}}
                        <a>About</a>
                    </div>
                    <div class="navItem">
                        {{-- <a href="{{ route('contact') }}">Contact</a> --}}
                        <a>Contact</a>
                    </div>
                    <div class="navItem">
                        {{-- for possible extra's --}}
                        {{-- <a href="{{ route('contact') }}">Contact</a> --}}
                        <a>example</a>
                    </div>
                    <div class="navItem">
                        {{-- for possible extra's --}}
                        {{-- <a href="{{ route('contact') }}">Contact</a> --}}
                        <a>example</a>
                    </div>

                </div>
            </nav>
            <div class="registerCon">
              <div class="registerForms">
                    <div class="registerHeader">
                            <h1>Register into Unified</h1>
                    </div>
                    <div class="registerFormCon">
                        
                        <form class="registerForm" action="{{ route('login') }}" method="POST">
                            @csrf

                            {{-- name --}}
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput" type="text" name="name" :value="old('name')" required autofocus />
                                <x-label class="textLabel" for="name" :value="__('Name')" />
                                <div class="bar" id="generalBar"></div>
                            </div>

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

                            <!-- Password Confirm-->
                            <div class="group emailGroup" id="loginFormGroup">
                                <x-input id="generalTextInput" class="textInput"
                                                type="password"
                                                name="password_confirmation"
                                                required autocomplete="current-password" />
                                <x-label class="textLabel" for="password" :value="__('Confirm Password')" />
                                <div class="bar" id="generalBar"></div>
                            </div>

                            {{-- button --}}
                            <div class="registerButtonCon">
                                {{-- <x-button class="button">
                                {{ __('register') }}
                            </x-button> --}}
                                <button type="button" class="registerButton"> <a href="">register</a></button>
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
