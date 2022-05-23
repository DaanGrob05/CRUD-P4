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
    <!-- Automatische code voor login en register, voor nu laten staan als voorbeeld -->
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

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
      <div class="landing">
        <div class="landingContent">
          <div class="flightsFormCon">
            <div class="flightsNav">
              <div class="flightsNavItem">
                <a>flights</a>
              </div>
              <div class="flightsNavItem">
                {{-- <a>example</a> --}}
              </div>
              <div class="flightsNavItem">
                {{-- <a>example</a> --}}
              </div>
              <div class="flightsNavItem">
                {{-- <a>example</a> --}}
              </div>
            </div>
            <div class="formCon">
              <form action="">
                
                <div class="whereFromCon">
                    <div class="group emailGroup" id="loginFormGroup">
                      <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                      <label class="textLabel" for="name">from*</label>
                      <div class="bar" id="generalBar"></div>
                  </div>
                  <div class="group emailGroup" id="loginFormGroup">
                      <input class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                      <label class="textLabel" for="name">to*</label>
                      <div class="bar" id="generalBar"></div>
                  </div>
                </div>
                <div class="typeTicketCon">
                    <label class="radioLabel">
                      <input
                        class="radioInput"
                        type="radio"
                        name="typeTrip"
                        id="oneWay"
                      />
                      <span class="radioSpan">One-Way</span>
                    </label>
                  <label class="radioLabel">
                      <input
                        class="radioInput"
                        type="radio"
                        name="typeTrip"
                        id="oneWay"
                      />
                      <span class="radioSpan">One-Way</span>
                  </label>
                </div>
                <div class="whenCon">
                   <div class="group">
                        <label class="dateLabel">departure date*</label>
                        <input class="textInput" type="date" id="date" required="required" />
                        <div class="bar"></div>
                    </div>
                    <div class="group">
                        <label class="dateLabel">return date</label>
                        <input class="textInput" type="date" id="name" required="required" />
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="classCon">
                  <label class="radioLabel">
                      <input
                        class="radioInput"
                        type="radio"
                        name="typeTrip"
                        id="oneWay"
                      />
                      <span class="radioSpan">Economy</span>
                  </label>
                  <label class="radioLabel">
                      <input
                        class="radioInput"
                        type="radio"
                        name="typeTrip"
                        id="oneWay"
                      />
                      <span class="radioSpan">Business</span>
                  </label>
                  
                </div>
                <div class="flightsButtonCon">
                    <button class="flightsButton"><a>search</a></button>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="extraInfo">
          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <div class="contentSpacer">
  </div>
  <footer></footer>
  <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
  </body>
    
</html>
