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
                    <a href="#food" class="transition duration-500">Foods</a>
                    <a href="#contacts" class="transition duration-500">Contacts</a>
                    <a href="#about" class="transition duration-500">About Us</a>
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
                    <a href="#food" class="w-full text-center py-3">Foods</a>
                    <hr class="h-1">
                    <a href="#contacts" class="w-full text-center py-6 hover:opacity-90">Contacts</a>
                    <hr class="h-1">
                    <a href="#about" class="w-full text-center py-6 hover:opacity-90">About Us</a>
                    <hr class="h-1">
                    <a href="/productlist" class="w-full text-center py-6 hover:opacity-90">Our
                        Products</a>
                    <hr class="h-1">
                </nav>
            </section>
        </div>
    </header>


    {{-- END HEADER --}}

    {{-- START MAIN --}}
    <main class="max-w-7xl mx-auto ">

        {{-- LANDING PAGE --}}
        <section class="flex flex-col-reverse justify-center sm:flex-row p-6 items-center gap-4 mb-12">
            <article class="sm:w-1/2 ">
                <h2
                    class="text-6xl font-extrabold text-center sm:text-left sm:text-6xl text-orange-500 animate-reveal-x">
                    Welcome to <span class="text-orange-900">bu</span>rger dungeon.
                </h2>
                <br>
                <h2 class="text-4xl font-semibold sm:text-4xl text-orange-500 text-center sm:text-left animate-reveal">
                    Hungry? Try <span class="text-yellow-800 font-normal">Our Burgers Made
                    </span>
                    with Half Pound Patties.
                </h2>
                <h3
                    class="font-['Poppins'] text-1xl font-thin sm:text-2xl text-gray-600 text-center sm:text-left animate-reveal-x">
                    <br>
                    “Tasty, delicious, and has me craving more on the first bite.”
                    to “Juicy, mouthwatering, tasty, and everything
                    you’d ever want to savor.”
                </h3>
                <br>
            </article>
            <div class="w-11/12 sm:w-5/4 transition duration-500 hover:scale-110">
                <img class="animate-waving-hand w-11/12 m-auto sm:m-none" src="img/burger.png" alt="burger">
            </div>
        </section>
        {{-- END LANDING PAGE --}}

        <div class="flex flex-col-reverse justify-center sm-flex-row  items-center -my-20">
            <a href="#food"
                class="font-['Poppins'] bg-orange-500 hover:bg-orange-400 text-white font-semibold py-4 px-8 sm:py-4 sm:px-8 text-3xl border-b-4 border-orange-700 hover:border-orange-50 rounded-full animate-bounce">
                ↓</a>
        </div>
        <!-- END LANDING PAGE -->

        <hr class="mx-auto bg-orange-900 w-1/2 h-1 mt-32" id="food">

        {{-- START PRODUCT --}}
        <!-- START PRODUCTS -->
        <section class="p-6 my-1 justify-center items-center">
            <h2 class="font-['Poppins'] text-4xl font-extrabold text-center sm:text-7xl mb-6 my-24 text-orange-500">
                The Mythical 3 <span class="text-orange-900">Bu</span>rgers
            </h2>
            <ul class="list-none mx-auto my-12 flex flex-col sm:flex-row items-center gap-8">

                <!-- CARD 1 -->
                <li
                    class=" w-full sm:w-5/6 flex flex-col items-center bg-white py-6 rounded-3xl shadow-2xl transition duration-500 hover:scale-110">
                    <img src="img/img1.jpg" alt="product1" class="w-3/4 mb-6 rounded-xl" id="product-img-1">
                    <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                        id="product-title-1">
                        Dungeon à la King
                    </h3>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Try this Dungeon à la King
                        to experince becoming a king!</p>
                    <p class="font-['Poppins'] text-gray-600 text-xl mt-3 mx-2 text-center hidden " id="product-desc-1">
                        The
                        Dungeon à la King burger is the ultimate indulgence for burger lovers. This burger is fit for
                        royalty, with a juicy, flame-grilled beef patty that's perfectly seasoned and topped with a
                        generous helping of melted cheese, crispy bacon, and sautéed mushrooms. The burger is then
                        finished off with a dollop of tangy aioli sauce, all served on a fresh brioche bun.</p>
                    <button type="button" id="prev1"
                        class="showmodal1  text-center bg-orange-500 text-white py-2  w-1/2 rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out">Preview</button>
                </li>

                <!-- CARD 2 -->
                <li
                    class=" w-full sm:w-5/6 flex flex-col items-center bg-white py-6 rounded-3xl shadow-2xl transition duration-500 hover:scale-110">
                    <img src="img/img2.jpg" alt="product1" class="w-3/4 mb-6 rounded-xl" id="product-img-2">
                    <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                        id="product-title-2"> Double Sheesh`
                        Burger
                    </h3>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">
                        You can just say "Sheeesh" at the delicious taste</p>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center hidden" id="product-desc-2">
                        The Double Sheesh` Burger is bursting with flavor and is complemented by a range of tasty
                        toppings, including fresh lettuce, tomato, onion, and tangy pickles. To give the burger an extra
                        kick, a drizzle of creamy garlic sauce is added, making it the perfect combination of savory and
                        tangy flavors.</p>
                    <button type="button" id="prev2"
                        class="showmodal2 text-center bg-orange-500 text-white py-2  w-1/2 rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out">Preview</button>
                </li>

                <!-- CARD 3 -->

                <li
                    class="w-full sm:w-5/6 flex flex-col items-center bg-white py-6 rounded-3xl shadow-2xl transition duration-500 hover:scale-110">
                    <img src="img/img3.jpg" alt="product1" class="w-3/4 mb-6 rounded-xl" id="product-img-3">
                    <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                        id="product-title-3"> Veggie à la Queen
                    </h3>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">
                        Vegetarian burger fit for royalty with avocado, garlic mayo, and veggies.
                    </p>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center hidden"
                        id="product-desc-3">
                        At the
                        heart of the Veggie à la Queen burger is a mouth-watering vegetable patty, made with a flavorful
                        blend of fresh vegetables and herbs. The patty is then topped with creamy avocado, crisp
                        lettuce, juicy tomato, and tangy pickles, all nestled between two soft and fluffy buns.</p>
                    <button href="preview.html" type="button" id="prev3"
                        class="showmodal3 text-center bg-orange-500 text-white py-2  w-1/2 rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out">Preview</button>
                </li>

                <!-- MODALS -->
                <div class="modal h-screen w-full fixed overflow-y-auto left-0 top-0 hidden justify-center items-center bg-black bg-opacity-50 inset-0 z-50 "
                    id="modal">
                    <div class="bg-white rounded-2xl shadow-lg w-3/4 lg:w-1/2 z-50 inset-0 animate-reveal">
                        <div class="border-b px-4 py-2">
                            <h3 class="product-title font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                                id="">
                            </h3>
                            <img src="" alt="product1"
                                class="product-img w-3/4 sm:w-1/2 mb-6 rounded-xl m-auto mt-6" id="product-img">
                        </div>

                        <div>
                            <p
                                class="product-desc p-3 font-['Poppins'] text-gray-600 text-xs sm:text-lg mt-3 mx-2 text-center">
                            </p>
                        </div>
                        <div class="flex justify-end items-center w-100 border-t p-3">
                            <button type="button"
                                class="close-modal text-center bg-orange-500 text-white py-2  w-1/3 rounded-lg font-semibold
                            hover:bg-orange-300 focus:scale-95 transition-all
                            duration-200 ease-out m-auto">Okay</button>
                        </div>
                    </div>
                </div>
                <!-- END OF MODAL -->
        </section>
        {{-- END PRODUCT --}}

        <div class="flex flex-col-reverse justify-center sm-flex-row  items-center">
            <a href="/productlist"
                class="font-['Poppins'] bg-orange-500 hover:scale-110 text-white font-semibold py-2 px-8 text-xl border-b-4 border-orange-700 rounded-full">
                See More</a>
        </div>

        <!-- END PRODUCTS -->

        <hr class="mx-auto bg-orange-900 w-1/2 h-1 mt-32" id="contacts">

        <!-- CONTACTS -->
        <section class="p-6 my-12 justify-center items-center">
            <h2 class="font-['Poppins'] text-4xl font-extrabold text-center sm:text-7xl mb-6 text-orange-500  mt-5">
                Contacts
            </h2>


            <div class="relative container px-4 mx-auto ">
                <p class="mb-20 text-lg text-gray-700 text-center font-medium md:max-w-lg mx-auto">Need help or have a
                    question? Don't hesitate to reach out! Our team is
                    ready and waiting to assist you. Contact us today and experience the top-notch
                    customer service that sets us apart.</p>
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/3 p-3">
                        <div class="p-11 h-full text-center">
                            <div class="mb-6 relative mx-auto w-16 h-16 bg-orange-500 rounded-full">
                                <img src="img/facebook.png" alt="" class="m-auto">
                            </div>
                            <h3 class="mb-3 text-xl font-bold font-heading leading-snug font-['Poppins']">facebook</h3>
                            <p class="font-medium leading-relaxed">Burger Dungeon Official</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-3">
                        <div class="p-11 h-full text-center">
                            <div
                                class="mb-6 relative mx-auto w-16 h-16 bg-white border border-blueGray-200 rounded-full">
                                <img src="img/whatsapp.png" alt="">
                            </div>
                            <h3 class="font-['Poppins'] mb-3 text-xl font-bold font-heading leading-snug">WhatsApp</h3>
                            <p class="font-medium leading-relaxed">+63 8408 412 569</p>
                            <p class="font-medium leading-relaxed">+63 5356 213 545</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-3">
                        <div class="p-11 h-full text-center">
                            <div
                                class="mb-6 relative mx-auto w-16 h-16 bg-white border border-blueGray-200 rounded-full">
                                <img src="img/location-pin.png" alt="">
                            </div>
                            <h3 class="mb-3 text-xl font-bold font-heading leading-snug">Our Branches</h3>
                            <p class="font-medium max-w-xs mx-auto leading-relaxed"> 139 Corporate Center, 139 Valero
                                Street, Salcedo Village
                                Makati City <br> <br>
                                <hr class="py-2">
                            </p>
                            <p class="font-['Poppins'] font-medium max-w-xs mx-auto leading-relaxed">Anita Building
                                1100, Quezon City</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF CONTACTS -->

        <hr class="mx-auto bg-orange-900 w-1/2 h-1" id="about">

        {{-- START ABOUT US --}}
        <section class="p-6 my-12 justify-center items-center">
            <h2 class="font-['Poppins'] text-4xl font-extrabold text-center sm:text-7xl mb-6 text-orange-500 ">
                About Us
            </h2>

            <!-- component -->
            <div class="max-w-screen-xl mx-auto px-4 py-8">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2">
                        <img src="/img/logo.png" alt="About Us Image" class="w-full h-1/2">
                    </div>
                    <div class="lg:w-1/2 lg:pl-8 mt-8 lg:mt-0">
                        <h1 class="text-3xl font-bold mb-4 text-orange-500">Burger Dungeon</h1>
                        <p class="text-lg leading-7 mb-6">Burger Dungeon is a family-owned restaurant that has been
                            serving delicious burgers, fries, and shakes since 1995. Our secret blend of spices and
                            homemade sauces make our burgers the juiciest and most flavorful you'll ever taste.</p>
                        <p class="text-lg leading-7 mb-6">We source our ingredients locally whenever possible, and we
                            only use the freshest, highest-quality meats and produce in our recipes. Our commitment to
                            quality is what sets us apart from the competition.</p>
                        <p class="text-lg leading-7">Come visit us today and taste the difference for yourself!</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ABOUT US --}}
    </main>
    {{-- END MAIN --}}

    {{-- START FOOTER --}}
    <footer class="p-4 bg-orange-900 rounded-lg shadow md:px-6 md:py-8 ">
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

    {{-- SCRPTS --}}
    <script src="/modals.js"></script>
</body>

</html>
