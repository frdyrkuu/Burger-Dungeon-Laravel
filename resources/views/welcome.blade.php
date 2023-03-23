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

</head>

<body class="body antialiased">

    {{-- START HEADER --}}

    <header class="bg-orange-900 text-white sticky top-0 z-50 font-['Poppins'] shadow-2xl">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']  transition duration-500 hover:scale-110">
                <a href="/"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button id="mobile-open-button" class="text-3xl sm:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="#food" class="transition duration-500">Foods</a>
                    <a href="#contacts" class="transition duration-500">Contacts</a>
                    <a href="#about" class="transition duration-500">About Us</a>
                    <a href="/productlist" class="bg-orange-500 p-2 rounded-2xl shadow-xl transition duration-500 hover:scale-110 px-4 border-b-4 border-orange-700">&#128722 Our Products</a>
                </nav>
            </div>
        </section>
    </header>

    {{-- END HEADER --}}

    {{-- START MAIN --}}
    <main class="max-w-7xl mx-auto ">

        {{-- LANDING PAGE --}}
        <section class="flex flex-col-reverse justify-center sm:flex-row p-6 items-center gap-4 mb-12">
            <article class="sm:w-1/2 ">
                <h2
                    class="text-6xl font-extrabold text-center sm:text-left sm:text-6xl text-orange-500">
                    Welcome to <span class="text-orange-900">bu</span>rger dungeon.
                </h2>
                <br>
                <h2 class="text-4xl font-semibold sm:text-4xl text-orange-500 text-center sm:text-left">
                    Hungry? Try <span class="text-yellow-800 font-normal">Our Burgers Made
                    </span>
                    with Half Pound Patties.
                </h2>
                <h3 class="font-['Poppins'] text-1xl font-thin sm:text-2xl text-gray-600 text-center sm:text-left">
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

        <hr class="mx-auto bg-orange-900 w-1/2 h-1 mt-32">

        {{-- START PRODUCT --}}
        <!-- START PRODUCTS -->
        <section id="food" class="p-6 my-1 justify-center items-center">
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
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center hidden" id="product-desc-3">
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
                    <div class="bg-white rounded-2xl shadow-lg w-3/4 sm:w-1/3 z-50 inset-0 animate-reveal">
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

        <hr class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

        <!-- CONTACTS -->
        <section id="contacts" class="p-6 my-12 justify-center items-center">
            <h2 class="font-['Poppins'] text-4xl font-extrabold text-center sm:text-7xl mb-6 text-orange-500 ">
                Contacts
            </h2>


            <div class="relative container px-4 mx-auto ">
                <p class="mb-20 text-lg text-gray-600 text-center font-medium md:max-w-lg mx-auto">Need help or have a
                    question? Don't hesitate to reach out! Our team is
                    ready and waiting to assist you. Contact us today and experience the top-notch
                    customer service that sets us apart.</p>
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/3 p-3">
                        <div
                            class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
                            <div class="mb-6 relative mx-auto w-16 h-16 bg-orange-500 rounded-full">
                                <img src="img/facebook.png" alt="" class="m-auto">
                            </div>
                            <h3 class="mb-3 text-xl font-bold font-heading leading-snug font-['Poppins']">facebook</h3>
                            <p class="font-medium leading-relaxed">Burger Dungeon Official</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-3">
                        <div
                            class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
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
                        <div
                            class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
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

        <hr class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

        {{-- START ABOUT US --}}
        <section id="about" class="p-6 my-12 justify-center items-center">
            <h2 class="font-['Poppins'] text-4xl font-extrabold text-center sm:text-7xl mb-6 text-orange-500 ">
                About Us
            </h2>

            <!-- component -->
            <div class="container mx-auto mb-32 sm:my-10  sm:shadow-lg sm:rounded-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
                    <div class="max-h-96 md:h-20">
                        <img class="w-screen h-screen object-cover object-top" src="img/logo.png" alt="">
                    </div>
                    <div class="flex bg-white shadow-xl rounded-lg sm:bg-transparent sm:shadow-none sm:rounded-none">
                        <div class="mb-auto mt-auto max-w-lg">
                            <h1
                                class="text-5xl uppercase text-orange-500 font-bold font-['Poppins'] text-center mt-5 mx-2">
                                Burger Dungeon
                            </h1>
                            <p class="font-semilight text-orange-400 mb-5 font-['Poppins'] text-center text-3xl mx-4">
                                Welcome to Burger Dungeon, the ultimate
                                destination for burger
                                enthusiasts!
                            </p>
                            <p
                                class="font-['Poppins'] text-sm text-center sm:text-justify sm:text-xl px-2 text-gray-600 mx-4">
                                At Burger Dungeon, we believe that a
                                burger
                                is not just a meal, it's an experience.
                                That's why we have created a unique and exciting burger shop where you can indulge in a
                                variety of mouth-watering burgers that are guaranteed to satisfy your cravings.
                            </p>

                            <div class="flex flex-wrap items-center justify-center space-x-2 my-10">
                                <button
                                    class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </button>

                                <button
                                    class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </button>

                                <button
                                    class="bg-red-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z" />
                                    </svg>
                                </button>

                                <button
                                    class="bg-blue-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                            </path>
                                        </g>
                                    </svg>
                                </button>

                                <button
                                    class="bg-red-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </button>

                                <button
                                    class="bg-gray-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" class="w-5"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </button>

                                <button
                                    class="bg-red-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" class="w-5"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12c6.627 0 12-5.373 12-12S18.627 0 12 0zm.14 19.018c-3.868 0-7-3.14-7-7.018c0-3.878 3.132-7.018 7-7.018c1.89 0 3.47.697 4.682 1.829l-1.974 1.978v-.004c-.735-.702-1.667-1.062-2.708-1.062c-2.31 0-4.187 1.956-4.187 4.273c0 2.315 1.877 4.277 4.187 4.277c2.096 0 3.522-1.202 3.816-2.852H12.14v-2.737h6.585c.088.47.135.96.135 1.474c0 4.01-2.677 6.86-6.72 6.86z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </button>
                            </div>

                        </div>
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
        <span class="block text-sm text-white sm:text-center ">©<a href=""
                class="hover:underline">frdyrkuu</a>.
            All
            Rights Reserved.
        </span>
    </footer>
    {{-- END FOOTER --}}

    {{-- SCRPTS --}}
    <script src="/modals.js"></script>
</body>

</html>
