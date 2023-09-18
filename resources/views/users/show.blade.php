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
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-last-name">
              Ingresa el Autor : {{ $libro->autor }}
            </label>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" for="grid-password">
              Año de Publicación: {{ $libro->ano_publicacion }}
            </label>
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
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block appearance-none w-full bg-gray-200 border border-gray-200 
                          text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
                          focus:bg-white focus:border-gray-500" >
              Género: {{ $libro->genero }}
            </label>
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
      </form>
    
</body>
</html>