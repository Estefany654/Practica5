<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud de tareas</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Crud de tareas</span>
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                        {{ __('Login') }}
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                            {{ __('Register') }}
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
            @endif

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -mx-4 -my-8">
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Jul</font>
                            </font>
                            </span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">18</font>
                            </font>
                            </span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">CATEGORÍA</font>
                            </font>
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">los 400 golpes</font>
                            </font>
                            </h1>
                            <p class="leading-relaxed mb-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fotomatón fam kinfolk leggings sriracha prensados ​​en frío jianbing microdosing chaleco despeinado.</font>
                            </font>
                            </p>
                            <a class="inline-flex items-center">
                            <img alt="Blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-3">
                                <span class="title-font font-medium text-gray-900">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">alper kamu</font>
                                </font>
                                </span>
                            </span>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Jul</font>
                            </font>
                            </span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">18</font>
                            </font>
                            </span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">CATEGORÍA</font>
                            </font>
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Estrellas fugaces</font>
                            </font>
                            </h1>
                            <p class="leading-relaxed mb-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fotomatón fam kinfolk leggings sriracha prensados ​​en frío jianbing microdosing chaleco despeinado.</font>
                            </font>
                            </p>
                            <a class="inline-flex items-center">
                            <img alt="Blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-3">
                                <span class="title-font font-medium text-gray-900">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Holden Caulfield</font>
                                </font>
                                </span>
                            </span>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Jul</font>
                            </font>
                            </span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">18</font>
                            </font>
                            </span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">CATEGORÍA</font>
                            </font>
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Neptuno</font>
                            </font>
                            </h1>
                            <p class="leading-relaxed mb-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fotomatón fam kinfolk leggings sriracha prensados ​​en frío jianbing microdosing chaleco despeinado.</font>
                            </font>
                            </p>
                            <a class="inline-flex items-center">
                            <img alt="Blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-3">
                                <span class="title-font font-medium text-gray-900">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Henry Letham</font>
                                </font>
                                </span>
                            </span>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>         
        </div>
    </body>
</html>
