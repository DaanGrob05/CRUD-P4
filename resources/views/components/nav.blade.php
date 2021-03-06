@props(['id' => ''])

<link rel="stylesheet" href="{{ asset('css/app.css') }}">


<nav id="{{ $id }}">
    <div class="userItemsCon">
        <div class="unifiedLogo">
            <a href="{{ route('welcome') }}">unified</a>
            {{-- plane icon needs to be added img on ivan's laptop(downloads) --}}
        </div>
        <div class="userEmptySpace">

        </div>
        <div class="navItem">
            <a href="{{ route('about') }}">About</a>
        </div>
        <div class="navItem">
            <a href="{{ route('contact.create') }}">Contact</a>
        </div>
        <div class="userItem">
            {{-- href to trips page --}}
            <a href="{{ route('reizen.index') }}">Trips</a>
        </div>
        <div class="userItem">
            @if(Auth::check())
            <a href="{{ route('home') }}">Profile</a>
            @else
            <a href="{{ route('login') }}">sign in</a>
            @endif
        </div>
    </div>
</nav>
