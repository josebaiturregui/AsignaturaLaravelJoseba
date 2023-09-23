<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biblioteca App') }}
        </h2>
    </x-slot>
    <div class="grid  xl:grid-cols-2 gap-2 px-4">
        <div class="w-400 max-w-400 min-w-400 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 
                xl:grid-cols-1 gap-4 px-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[auto] my-[100px]">
                <img class="w-full" src="{{URL::asset('books.jpg')}}" alt="bookshelf">
                <div class="grid px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('libros.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Ver Libros</a></span>
                </div> 
            </div>
        </div>          
        <div class="w-400 max-w-400 min-w-400 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 px-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[auto] my-[100px]">
                <img class="w-full" src="{{URL::asset('books.jpg')}}" alt="bookshelf">
                <div class="grid px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('prestamos.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Cantidad de Préstamos: {{ Auth::user()->prestamos->count()}}</a></span>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>
