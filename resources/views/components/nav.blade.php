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
        <div class="userItem">
            {{-- href to trips page --}}
            <a href="{{ route('reizen.index') }}">Search</a>
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
            <a href="{{ route('about') }}">About</a>
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
