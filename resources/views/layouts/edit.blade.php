<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Burger Dungeon</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/header.css">
    <script src="/display.js"></script>

</head>

<body class="font-['Poppins']">
    <header class="bg-white text-orange-900 sticky top-0 z-50 font-['Poppins']" id="head">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']  transition duration-500 hover:scale-110">
                <a href="/productlist"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button onclick="hamburger()" class="text-3xl sm:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="/" class="w-full text-center py-3">Home</a>
                    <a href="/#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                    <a href="/#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                    <a href="/productlist" class="w-full text-center py-6 hover:opacity-90">Our Products</a>
                </nav>
            </div>
        </section>

        <section id="mobile-menu"
            class="hidden absolute bg-white w-full text-5xl flex-col justify-content-center shadow-2xl transition duration-500 animate-reveal-x">
            <nav class="flex flex-col min-h-screen items-center py-8 text-xl" aria-label="mobile">
                <a href="/#food" class="w-full text-center py-3">Foods</a>
                <a href="/#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                <a href="/#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                <a href="/productlist" class="w-full text-center py-6 hover:opacity-90">Our Products</a>
            </nav>
        </section>
        </section>
    </header>


    <main class="max-w-7xl mx-auto ">
        @yield('content')


    </main>







    {{-- START FOOTER --}}
    {{-- <footer class="p-4 bg-orange-900 rounded-lg shadow md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-4xl font-bold whitespace-nowrap text-white font-['Poppins']"><span
                        class="text-orange-500">bu</span>rger dungeon.</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-white sm:mb-0">
                <li>
                    <a href="#" class="hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    @if (Route::has('login'))
                        <div class="px-4">
                            @auth
                                <a href="{{ url('/home') }}" class="hover:underline md:mr-6 ">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="hover:underline md:mr-6 ">Managing</a>
                            @endauth
                        </div>
                    @endif
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-white sm:mx-auto lg:my-8" />
        <span class="block text-sm text-white sm:text-center ">©<a href="" class="hover:underline">frdyrkuu</a>.
            All
            Rights Reserved.
        </span>
    </footer> --}}
    {{-- END FOOTER --}}
    <script src="/display.js"></script>
    <script src="/header.js"></script>
</body>

</html>
