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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <!-- Authenticatie, laten staan voor nu -->
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- Main content -->
    <div class="landingSpacer">
      <nav>
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
                <a>sign in</a>
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
      <div class="landing">
        <div class="landingContent">
          <div class="flightsFormCon">
            <div class="flightsNav">
              <div class="flightsNavItem">
                <a>example</a>
              </div>
              <div class="flightsNavItem">
                <a>example</a>
              </div>
              <div class="flightsNavItem">
                <a>example</a>
              </div>
              <div class="flightsNavItem">
                <a>example</a>
              </div>
            </div>
            <div class="formTitle">
              <p>Flight</p>
            </div>
            <form></form>
          </div>
          <div class="extraInfo">
            <!--  -->
          </div>
        </div>
      </div>
    </div>
    <div class="contentSpacer">
      <!-- temp name -->
      <div class="content">
        <div class="contentHeader">
          <h1></h1>
        </div>
        <div class="contentBody"></div>
      </div>
    </div>
    <div class="contentSpacer">
      <!-- temp name -->
      <div class="content">
        <div class="contentHeader">
          <h1></h1>
        </div>
        <div class="contentBody"></div>
      </div>
    </div>
    <div class="contentSpacer">
      <!-- temp name -->
      <div class="content">
        <div class="contentHeader">
          <h1></h1>
        </div>
        <div class="contentBody"></div>
      </div>
    </div>
    <footer></footer>
    </body>
</html>
