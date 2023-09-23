<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:flex-12 sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ route('libros.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Libros</a>
                        <a href="{{ route('prestamos.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Prestamos</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class= "grid w-384 max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 
            xl:grid-cols-1 gap-4 px-4">

            <div class= "grid w-384 max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 
                         xl:grid-cols-1 gap-4 px-4">

                <img class="w-full" src="{{URL::asset('bookshelf.svg')}}" alt="bookshelf">
                {{-- <img class="w-full bg-red" src="{{URL::asset('bookshelf.svg')}}" alt="bookshelf"> --}}
                <div class="mt-16">
                    <h1 class="text-[36px] font-bold mx-[auto] my-[100px] pt-[100px] text-center">
                        Biblioteca App
                    </h1>
                </div>
                {{-- <div class="flex justify-center">
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                </div> --}}
            </div>

                <div class= "grid w-384 max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 
                        xl:grid-cols-1 gap-4 px-4">
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[auto] my-[100px]">
                    <img class="w-full" src="{{URL::asset('books.jpg')}}" alt="bookshelf">
                    <div class="px-6 py-4">
                      <div style="position: relative;" class="font-bold text-xl mb-2" >Biblioteca App
                      </div>
                      <div class="font-bold text-xl mb-2"></div>
                      <p class="text-gray-700 text-base">
                        Aplicación para administrar una base de datos y registros de prestamos de libros según usuarios
                      </p>
                    </div>
                    <div class="grid px-6 pt-4 pb-2">
                      <span class="inline-block  rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        
                      </span>
                    </div>
                    {{-- flex place-content-around --}}
                    <div class="grid px-6 pt-4 pb-2">
                     
                        <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Log in</a></span>
                       
                        <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Register</a></span>
                    </div> 
                </div>
            </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            
        </div>
    </body>
</html>
