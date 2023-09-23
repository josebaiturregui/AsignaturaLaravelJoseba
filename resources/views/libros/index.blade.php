<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Biblioteca App
    </h2>
  </x-slot>
  <div class= "grid w-384 mt-[20px] max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 px-4">
    <form method="get">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full  px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Buscar:
          </label>
          <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="grid-buscar-libro" 
            type="text" 
            placeholder="buscar libro" 
            name="buscar"
            value="{{ request("buscar") }}"
          >
        </div>
      </div>
      <button class="bg-red-800 hover:bg-red-900 text-white font-bold font-bold py-2 px-4 rounded" type='submit'>
        Buscar
      </button>
    </form>
  </div>
  <div class=" w-full my-[100px] text-white text-center font-bold py-2 px-4 rounded">
    <a href="{{ route('libros.create') }}" class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-[140px] rounded">
      Insertar Libro
    </a>
  </div>
  <div class= "grid w-384 max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 px-4">
      @foreach ($libros as $libro) 
      <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[auto] my-[100px]">
        <img class="w-full" src="{{URL::asset('books.jpg')}}" alt="bookshelf">
        <div class="px-6 py-4">
          <div style="position: relative;" class="font-bold text-xl mb-2" >
            {{ $libro->titulo }}
            <span
              style="position:relative; width:50px; height:25px;"
              class="bg-red-200 rounded-[10px] px-2 justify-end text-[10px] font-semibold text-gray-700  mb-2 cursor-pointer text-center">
              <a  href="{{ route('libros.show', $libro) }}">
                Ver
              </a>
            </span>
          </div>
          <div class="font-bold text-xl mb-2">
            {{ $libro->autor }}
          </div>
          <p class="text-gray-700 text-base">
            {{ $libro->descripcion }}
          </p>
        </div>
        <div class="grid px-6 pt-4 pb-2">
          <span
            class="inline-block bg-blue-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            Genero : {{ $libro->genero }}
          </span>
        </div>
        <div class="grid px-6 pt-4 pb-2">
          @if($libro->disponible == 1)
            <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
              <a href="{{ route('createprestamo', $libro->id) }}">
                Solicitar Prestamo
              </a>
            </span>
          @else
            <span class="inline-block bg-gray-200 rounded-[10px] px-3 text-sm font-semibold text-gray-700 mr-2 mb-2 pt-1 cursor-pointer text-center">
              <div class="col-sm">
                <form action="{{ route('entregarLibro', $libro->id) }}" method="post">
                  @csrf
                  @method('PUT')
                  <input 
                    type="hidden"
                    value="1"
                    >
                  <button
                    class="inline-block bg-gray-200 rounded-[10px] px-3 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"
                    type='submit'>
                    Entregar Libro
                  </button>
                </form>
              </div>  
            </span>
          @endif
          <span
            class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
            <a href="{{ route('libros.edit', $libro) }}">
              Actualizar
            </a>
          </span>
          <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
            <div class="col-sm">
              <form action="{{ route('libros.destroy', $libro->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
              </form>
            </div>
          </span>
          @if ($libro->disponible == 1)
            <span style="position:relative" class="bg-green-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
              Disponible 
              <span style="position:absolute; right:15px">
                <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" 
                  viewBox="0 0 24 24" 
                  stroke-width="1.5" 
                  stroke="currentColor" class="w-4 h-4" 
                  class="bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
              </span>
            </span>
          @else
            <span style="position:relative" class="bg-red-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
              No disponible 
              <span style="position:absolute; right:15px">
                <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" 
                  viewBox="0 0 24 24" 
                  stroke-width="1.5" 
                  stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
            </span>
        @endif
        </div>
      </div>
    @endforeach
  </div>
</x-app-layout>
