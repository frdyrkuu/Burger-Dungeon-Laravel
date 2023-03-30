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

    <div class="py-4 mb-36 -mt-5 overflow-x-auto">
        <header class="bg-white text-orange-900 fixed w-full z-10 shadow-xl" id="headX">
            <div class="container mx-auto max-w-7xl">
                <h1 class="text-xl font-bold text-orange-900 ml-5 mt-5"><span class="text-orange-500">Your</span> Choice
                </h1>
                <div class="overflow-x-auto mt-2">
                    <nav class="flex px-2 text-center text-orange-900 text-lg font-light mb-5 whitespace-nowrap gap-3">
                        <a href="/productlist#{{ $product->category }}"
                            class="px-4 py-2 uppercase">{{ $product->category }}</a>
                        <p class="px-4 py-2">></p>
                        <p class="px-4 py-2">{{ $product->name }}</p>
                    </nav>
                </div>
            </div>
        </header>

    </div>

    <main class="max-w-7xl mx-auto flex-1">
        @yield('content')


    </main>

    {{-- START FOOTER --}}

    {{-- END FOOTER --}}
    <script src="/display.js"></script>
    <script src="/header.js"></script>
</body>

</html>
