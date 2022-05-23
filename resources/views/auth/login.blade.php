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
        <div class="loginSpacer">
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
            <div class="formCon">
              <div class="loginForms">
                    <div class="loginHeader">
                            <h1>Sign in</h1>
                    </div>
                    <div class="loginFormCon">
                        
                        <form class="loginForm" action="{{ route('login') }}" method="POST">
                            {{-- email --}}
                            <div class="group emailGroup" id="loginFormGroup">
                                {{-- <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus /> --}}
                            {{-- bestand van x-input staat in views/auth/input.blade.php --}}
                                <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                                <label class="textLabel" for="name">Email*</label>
                                <div class="bar" id="generalBar"></div>
                            </div>
                            {{-- password --}}
                            <div class="group emailGroup" id="loginFormGroup">
                                {{-- <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class=""
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" /> --}}
                                <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                                <label class="textLabel" for="name">Password*</label>
                                <div class="bar" id="generalBar"></div>
                            </div>
                            <div class="loginButtonCon">
                                {{-- <x-button class="button">
                                {{ __('Log in') }}
                            </x-button> --}}
                                <button type="button" class="loginButton"> <a href="">Sign in</a></button>
                            </div>
                            <div class="rememberMeCon">
                                <label for="remember_me" class="inline-flex items-center rem">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
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
    </body>
</html> 
    {{-- </x-auth-card> --}}

