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
    <header class="bg-orange-900 text-white sticky top-0 z-50 font-['Poppins'] shadow-2xl mb-10">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']  transition duration-500 hover:scale-110">
                <a href="/"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button onclick="hamburger()" class="text-3xl sm:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="#burger" class="transition duration-500">Burger</a>
                    <a href="#fries" class="transition duration-500">Fries</a>
                    <a href="#barbeque" class="transition duration-500">Barbeque</a>
                    <a href="#drinks" class="transition duration-500">Drinks</a>
                    <a href="#icecream" class="transition duration-500">Ice Cream</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu"
            class="hidden absolute top-0 bg-orange-900 opacity-90 w-full text-5xl flex-col justify-content-center origin-top animate-open-menu">
            <button class="text-8xl self-end px-6" onclick="hamburger()">&times;</button>

            <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
                <a href="" class="w-full text-center py-6 hover:opacity-90">Burger</a>
                <a href="" class="w-full text-center py-6 hover:opacity-90">Fries</a>
                <a href="" class="w-full text-center py-6 hover:opacity-90">Barbeque</a>
                <a href="" class="w-full text-center py-6 hover:opacity-90">Drinks</a>
                <a href="" class="w-full text-center py-6 hover:opacity-90">Ice Cream</a>
            </nav>
        </section>
    </header>
    <main class="max-w-7xl mx-auto ">
        @yield('content')

        <button id="scroll-btn" onclick="scrollToBottom()"
            class="fixed bottom-4 right-4 rounded-full bg-orange-500 text-white w-15 h-15 flex items-center justify-center mb-10 animate-bounce">
            <svg viewBox="0 0 24 24" width="48px" height="48px">
                <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
            </svg>
        </button>

       </main>

    {{-- START FOOTER --}}
    <footer class="p-4 bg-orange-900 rounded-lg shadow md:px-6 md:py-8">
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
    </footer>
    {{-- END FOOTER --}}
    <script src="/display.js"></script>
</body>

</html>
