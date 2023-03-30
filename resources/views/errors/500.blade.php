<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Burger Dungeon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/header.css">
    <script src="/display.js"></script>
    <script src="/header.js"></script>

</head>

<body class="body antialiased font-['Poppins']">

    {{-- START HEADER --}}
    <header class="bg-orange-900 text-white sticky top-0 z-50 font-['Poppins'] shadow-2xl" id="head1">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']  transition duration-500 hover:scale-110">
                <a href="/"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button onclick="hamburger()" class="text-3xl lg:hidden cursor-pointer">
                    ☰
                </button>
                <nav class="hidden lg:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="/#food" class="transition duration-500">Foods</a>
                    <a href="/#contacts" class="transition duration-500">Contacts</a>
                    <a href="/#about" class="transition duration-500">About Us</a>
                    <a href="/productlist"> <button
                            class="bg-orange-500 p-2 rounded-2xl shadow-xl transition duration-500 hover:scale-110 px-4 border-b-4 border-orange-700">&#128722
                            Our Products</button></a>
                </nav>
            </div>
        </section>
        <div class="relative">
            <section id="mobile-menu"
                class="hidden right-0 absolute bg-white w-1/2 xl:hidden text-5xl flex-col shadow-2xl transition duration-500 animate-reveal-x">
                <nav class="flex flex-col min-h-screen items-left py-8 text-xl text-orange-900" aria-label="mobile">
                    <button class="text-right text-2xl px-6" onclick="hamburger()">&times;</button>
                    <a href="/#food" class="w-full text-center py-3">Foods</a>
                    <hr class="h-1">
                    <a href="/#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                    <hr class="h-1">
                    <a href="/#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                    <hr class="h-1">
                    <a href="/productlist" class="w-full text-center py-6 hover:opacity-90">Our
                        Products</a>
                    <hr class="h-1">
                </nav>
            </section>
        </div>
    </header>

    {{-- END HEADER --}}
    <div class="w-11/12 sm:w-5/4">
        <img class="animate-floating w-11/12 h-11/12 m-auto sm:m-none object-contain"
            src="https://gist.githubusercontent.com/brudnak/aba00c9a1c92d226f68e8ad8ba1e0a40/raw/e1e4a92f6072d15014f19aa8903d24a1ac0c41a4/nyan-cat.gif"
            alt="burger">
    </div>
    {{-- START MAIN --}}
    <main class="max-w-full mx-auto">


        {{-- LANDING PAGE --}}

        <section class="flex flex-col-reverse justify-center sm:flex-row p-6 items-center gap-4 mb-12 text-center">
            <article class="sm:w-1/2 ">
                <h2 class="text-6xl font-extrabold text-center sm:text-6xl text-orange-500 animate-reveal-x">
                    <span class="text-orange-900">500 </span>| Something went wrong
                </h2>
                <br>
                <h2 class="text-4xl font-semibold sm:text-4xl text-orange-500 text-center animate-reveal">
                    <span class="text-yellow-800 font-normal">Unable
                    </span>
                    to post data
                </h2>
                <br>
            </article>
        </section>
        {{-- END LANDING PAGE --}}
    </main>
</body>

</html>
