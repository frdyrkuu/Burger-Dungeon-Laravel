<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Burger Dungeon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/header.css">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="/display.js"></script>

    @viteReactRefresh
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @viteReactRefresh
    @viteReactRefresh
    @vite('resources/css/app.css')
</head>

<body class="font-['Poppins']">

    <header class="bg-orange-900 text-white sticky top-0 z-50 font-['Poppins']">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']">
                <a href="/"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button onclick="hamburger()" class="text-3xl sm:hidden cursor-pointer">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-xl font-semibold" aria-label="main">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto px-10 flex flex-row">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white text-2sm"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white text-2sm ml-5"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white text-2xl mr-4"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-front w-11/12" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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

                </nav>
            </div>
        </section>

        <section id="mobile-menu"
            class="hidden absolute bg-white w-full text-5xl flex-col justify-content-center shadow-2xl transition duration-500 animate-reveal-x">
            <nav class="flex flex-col min-h-screen items-center py-8 text-xl text-orange-900" aria-label="mobile">
                @if (Route::has('register'))
                    <a class="w-full text-center py-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                <a href="#food" class="w-full text-center py-3">Foods</a>
                <a href="#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                <a href="#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                <a href="/productlist" class="w-full text-center py-6 hover:opacity-90">Our Products</a>
            </nav>
        </section>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
    </div>

</body>


</html>
