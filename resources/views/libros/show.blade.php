<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1 class="flex mx-[auto] my-[100px] text-center justify-center">
        {{-- block
tracking-wide --}}
        <label class="flex text-gray-700 text-[32px] capitalize font-bold mb-2  my-[100px] " >
            Detalles del Libro 
        </label>
    </h1>
    <form action='{{ route('libros.show', $libro)}}' 
          class="w-full max-w-lg mx-auto my-[50px]"
          method="post"
          >
      @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full  px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-first-name">
              Título del Libro : {{ $libro->titulo }}
            </label>
            {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 
                          leading-tight focus:outline-none 
                          focus:bg-white" 
              id="grid-titulo" 
              type="text" 
              placeholder="Ingrese título" 
              value="{{  $libro->titulo  }}"
              name="titulo"
            > --}}
            {{-- <p class="text-red-500 text-xs italic">Ingresa el Autor.</p> --}}
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-last-name">
              Ingresa el Autor : {{ $libro->autor }}
            </label>
            {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
             id="grid-autor" 
             type="text" 
             placeholder="Ingrese Autor"
             value="{{ $libro->autor }}"
             name="autor"
             > --}}
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-password">
              Año de Publicación: {{ $libro->ano_publicacion }}
            </label>
            {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
             id="grid-genero" 
             type="text" 
             placeholder="Ingresa el género"
             value="{{ $libro->ano_publicacion }}"
             name="ano_publicacion"
             > --}}
            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Descripción : 
            </label>
            <textarea rows="6" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
             id="grid-descripcion"  
             placeholder="Ingrese la descripción"
             name="descripcion"
             readonly
             disabled
             >{{ $libro->descripcion }}</textarea>
          </div>
        </div>
        {{-- class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                   for="grid-state" --}}
        {{-- class="block appearance-none w-full bg-gray-200 border border-gray-200 
                             text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                             focus:bg-white focus:border-gray-500" --}}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" >
              Género: {{ $libro->genero }}
            </label>
            {{-- <div class="relative">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
                             text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                             focus:bg-white focus:border-gray-500" 
                      id="grid-state"
                      value="{{ $libro->genero }}"
                      name="genero"
              >
                <option>Novela</option>
                <option>Ficción</option>
                <option>Romance</option>
                <option>Comedia</option>
                <option>Fantastico</option>
                <option>Terror</option>
                <option>Suspenso</option>
                <option>Fantasia</option>
                <option>Otro..</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div> --}}
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-state">
              Disponible: {{ $libro->disponible }}
            </label>
          </div>
        </div>
          <div>
            <a href="{{ route('libros.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                type='submit'>
                Volver
            </a>
          </div>
        </div>
        {{-- <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Disponible: {{ $libro->disponible }}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
             id="grid-genero" 
             type="text" 
             placeholder="Ingresa el género"
             value={{ $libro->genero }}>
          </div>
        </div> --}}
      </form>
    
</body>
</html>