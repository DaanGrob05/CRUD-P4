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

  <body class="antialiased">
    <!-- Main content -->
    <div class="landingSpacer">
      <x-nav></x-nav>

      <div class="landing">
        <div class="landingContent">
          <div class="flightsFormCon">
            <div class="flightsNav">
              <div class="flightsNavItem">
                <a>flights</a>
              </div>
              {{-- Deze 3 divs zijn voor meerdere onderdelen in de form als die komen --}}
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
              <form action="{{ route('reizen.index') }}" method="get">
                @csrf
                {{-- name is aangepast naar naam --}}
                <div class="whereFromCon">
                    <div class="group emailGroup" id="loginFormGroup">
                      <input name="name" class="textInput" id="generalTextInput" type="text" id="#" required="required" />
                      <label class="textLabel" for="name">from*</label>
                      <div class="bar" id="generalBar"></div>
                  </div>
                  <div class="group emailGroup" id="loginFormGroup">
                      <input class="textInput" id="generalTextInput" type="text" id="#" />
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
                      <span class="radioSpan">Retour</span>
                    </label>
                </div>
                <div class="whenCon">
                   <div class="group">
                        <label class="dateLabel">departure date*</label>
                        <input class="textInput" type="date" id="date" name="startDate" required="required" />
                        <div class="bar"></div>
                    </div>
                    <div class="group">
                        <label class="dateLabel">return date</label>
                        <input class="textInput" type="date" id="name" name="endDate" required="required" />
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
      </div>
    </div>
  <div class="welcomeContentSpacer">

    <div class="welcomeTitle">
      <h1>Welcome to Unified Travel Agency</h1>
    </div>
    <div class="welcomeContent">
      <div class="welcomeText">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Donec euismod, nisl eget consectetur sagittis, nisl nunc
          consectetur nisi, euismod aliquam nisi nisl euismod.
          Pellentesque habitant morbi tristique senectus et netus et
          malesuada fames ac turpis egestas. euismod aliquam nisi nisl euismod.
          Pellentesque habitant morbi tristique senectus et netus et
          malesuada fames ac turpis egestas.
        </p>
      </div>
      <div class="welcomeItems">
        <a class="ItemA" href="{{ route('reizen.index') }}">
          <div class="welcomeItem">
            <div class="welcomeItemImage">
              <img src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" alt="welcome2" />
            </div>
            <div class="welcomeItemText">
              <p>
                book your next trip with us
              </p>
            </div>
          </div>
        </a>
        <a class="ItemA" href="{{ route('about') }}">
          <div class="welcomeItem">
            <div class="welcomeItemImage">
              <img src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" />
            </div>
            <div class="welcomeItemText">
              <p>
                about us
              </p>
            </div>
          </div>
        </a>
        <a class="ItemA" href="{{ route('contact.create') }}">
          <div class="welcomeItem">
            <div class="welcomeItemImage">
              <img src="https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png" alt="welcome3" />
            </div>
            <div class="welcomeItemText">
              <p>
                contact us
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <x-footer></x-footer>
  <script type="text/javascript" src="{{ asset('js/slider.js') }}">
  </script>
</body>
    
</html>
