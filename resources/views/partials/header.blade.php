<header>
    <div class="top">
        <div class="container text-uppercase">
            <div class="row justify-content-end">
                <div class="col-2">
                    <small>dc power&trade; visa&reg;</small>
                </div>
                <div class="col-2">
                    <small>additional dc sites <i class="fas fa-caret-down"></i></small>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm bottom">
            <div class="container">
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="#">
                    <img width="80" src="{{asset('../img/dc-logo.png')}}" alt="logo DC" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto bottom">
                        <li><a class="{{Route::currentRouteName() === '' ? 'active' : ''}}" href="{{route('guest.characters.index')}}">characters</a></li>
                        <li><a class="{{Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : ''}}" href="{{route('guest.comics.index')}}">comics</a></li>
                        <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a></li>
                        <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">tv</a></li>
                        <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">games</a></li>
                        <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">collectibles</a></li>
                        <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">videos</a></li>
                        <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">fans</a></li>
                        <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">news</a></li>
                        <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">shop <i class="fa-solid fa-caret-down"></i></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    </div>
</header>
