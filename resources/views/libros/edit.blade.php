<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Editar Libro
    </h2>
  </x-slot>

  @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action='{{ route('libros.update', $libro) }}' 
      class="w-full max-w-lg mx-auto my-[50px]"
      method="post"
    >
    @csrf
    @method("PUT")
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full  px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Ingresa el Título : {{ $libro->titulo }}
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 
                        leading-tight focus:outline-none 
                        focus:bg-white" 
            id="grid-titulo" 
            type="text" 
            placeholder="Ingrese título" 
            value="{{  $libro->titulo  }}"
            name="titulo"
          >
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Ingresa el Autor : {{ $libro->autor }}
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-autor" 
            type="text" 
            placeholder="Ingrese Autor"
            value="{{ $libro->autor }}"
            name="autor"
            >
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Año de Publicación: {{ $libro->ano_publicacion }}
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-genero" 
            type="text" 
            placeholder="Ingresa el género"
            value="{{ $libro->ano_publicacion }}"
            name="ano_publicacion"
          >
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Ingresa la descripción : {{ $libro->descripcion }}
          </label>
          <textarea rows="6" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
            id="grid-descripcion"  
            placeholder="Ingrese la descripción"
            name="descripcion"
            >{{ $libro->descripcion }}</textarea>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Género: {{ $libro->genero }}
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
                            text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                            focus:bg-white focus:border-gray-500" 
              id="grid-state"
              value="{{ $libro->genero }}"
              name="genero"
            >
              <option>Novela</option>
              <option>Novela Policial</option>
              <option>Novela Romantica</option>
              <option>Novela de Caballerías</option>
              <option>Novela fantástica</option>
              <option>Novela de terror</option>
              <option>Historia</option>
              <option>Ciencia ficción</option>
              <option>Poesía</option>
              <option>Romance</option>
              <option>Comedia</option>
              <option>Magía</option>
              <option>Instructivo</option>
              <option>Narrativa Fantastica</option>
              <option>Científicos</option>
              <option>Biográficos</option>
              <option>Viajes</option>
              <option>Anime</option>
              <option>Comics</option>
              <option>Terror</option>
              <option>Suspenso</option>
              <option>Fantasia</option>
              <option>Aventura</option>
              <option>Otro..</option>
            </select>
          </div>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Disponible: @if ($libro->disponible)
              Si
            @else
              No
            @endif
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200
                            text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                            focus:bg-white focus:border-gray-500"
                id="grid-state"
                value="{{ $libro->disponible }}"
                name="disponible"
              >
              <option value="{{ $libro->disponible }}">
                @if ($libro->disponible)
                  Si
                @else
                  No
                @endif
              </option>
            </select>
          </div>
        </div>
      </div>
      <div class="flex ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          type='submit'>Modificar el Libro
        </button>
        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded" href="{{ route('libros.index') }}">
          Ver Libros
        </a>
      </div>
    </div>
  </form>
</x-app-layout>
