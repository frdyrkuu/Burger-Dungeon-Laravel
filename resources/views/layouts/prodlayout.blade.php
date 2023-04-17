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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-['Poppins']">
    <header class="bg-white text-orange-900 sticky top-0 z-50 font-['Poppins']  rounded-2xl" id="head">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']  transition duration-500 hover:scale-110">
                <a href="/productlist"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button onclick="hamburger()" class="text-3xl lg:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden lg:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="/" class="w-full text-center py-3">Home</a>
                    <a href="/#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                    <a href="/#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                </nav>
            </div>
        </section>

        <section id="mobile-menu"
            class="hidden absolute bg-white w-1/2 right-0 h-screen rounded-2xl text-5xl flex-col justify-content-center shadow-2xl transition duration-500 animate-reveal-x">
            <nav class="flex flex-col min-h-screen items-center py-8 text-xl" aria-label="mobile">
                <a href="/" class="w-full text-center py-3">Home</a>
                <a href="/#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                <a href="/#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
            </nav>
        </section>
        </section>
    </header>

    <div class="py-4 mb-36 -mt-5 overflow-x-auto">
        <header class="bg-white text-orange-900 fixed w-full z-10 shadow-xl  rounded-2xl" id="headX">
            <div class="container mx-auto max-w-7xl">
                <h1 class="text-xl font-bold text-orange-900 ml-5 mt-5"><span class="text-orange-500">Our</span> Menu
                </h1>
                <div class="overflow-x-auto mt-2">
                    <nav class="flex px-2 text-center text-orange-900 text-lg font-light mb-5 whitespace-nowrap gap-3">
                        <a href="/productlist#burger" class="px-4 py-2">Burger</a>
                        <a href="/productlist#fries" class="px-4 py-2">Fries</a>
                        <a href="/productlist#barbeque" class="px-4 py-2">Barbeque</a>
                        <a href="/productlist#drinks" class="px-4 py-2">Drinks</a>
                        <a href="/productlist#icecream" class="px-4 py-2">Ice Cream</a>
                    </nav>
                </div>
            </div>
        </header>
    </div>

    <main class="max-w-7xl mx-auto ">
        @yield('content')

        <button id="scroll-btn" onclick="scrollToBottom()"
            class="fixed bottom-4 right-4 rounded-full bg-orange-500 text-white w-15 h-15 flex items-center justify-center mb-10 animate-bounce">
            <i class="fa-solid fa-angles-down w-16 h-10 mt-6"></i>
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
        <span class="block text-sm text-white sm:text-center ">©<a href="https://github.com/frdyrkuu" target="_blank"
                rel="noopener noreferrer" class="hover:underline">frdyrkuu</a>.
            All
            Rights Reserved.
        </span>
    </footer>
    {{-- END FOOTER --}}
    <script src="/display.js"></script>
    <script src="/header.js"></script>
</body>

</html>
