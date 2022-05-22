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
{{-- <x-guest-layout>
    <x-auth-card> --}}
        {{-- <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        {{-- </x-slot> --}}

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
                        {{-- @if(Auth::check())
                        <a href="{{ route('home') }}">Profile</a>
                        @else
                        <a href="{{ route('login') }}">sign in</a>
                        @endif --}}
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
                <div class="registerFormCon">
                    <form class="registerForm" method="POST" action="{{ route('register') }}">
                        {{-- @csrf --}}
                        <div class="titleRegisterForm">
                            <h1 class="registerTitleText">Register to Unified</h1>
                        </div>
                        <!-- Name -->
                        <div class="group" id="registerFormGroup">
                            {{-- <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus /> --}}
                            <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                            <label class="textLabel" for="name">name*</label>
                            <div class="bar" id="generalBar"></div>
                        </div>

                        <!-- Email Address -->
                        <div class="group" id="registerFormGroup">
                            {{-- <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="" type="email" name="email" :value="old('email')" required /> --}}
                            <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                            <label class="textLabel" for="name">Email*</label>
                            <div class="bar" id="generalBar"></div>
                        </div>

                        <!-- Password -->
                        <div class="group" id="registerFormGroup">
                            {{-- <x-label for="password" :value="__('Password')" />
                            <x-input id="password" class=""
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" /> --}}
                            <input class="textInput" id="generalTextInput"  type="text" id="#" required="required" />
                            <label class="textLabel"  for="name">Password*</label>
                            <div class="bar" id="generalBar" ></div>
                        </div>        

                        <!-- Confirm Password -->
                        <div class="group" id="registerFormGroup">
                            {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input id="password_confirmation" class=""
                                            type="password"
                                            name="password_confirmation" required /> --}}
                            <input class="textInput" id="generalTextInput"  type="text" id="#" required="required" />
                            <label class="textLabel"  for="name">Comfirm password*</label>
                            <div class="bar" id="generalBar" ></div>
                        </div>        
                            {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class=""
                                            type="password"
                                            name="password_confirmation" required /> --}}
                        <div class="registeredCon">
                            <a class="" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </body>
</html>
    {{-- </x-auth-card>
</x-guest-layout> --}}
