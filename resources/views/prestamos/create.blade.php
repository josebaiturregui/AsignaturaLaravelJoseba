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
  <h1 class=" mx-[auto] my-[100px]">
    <label class=" uppercase text-gray-700 text-[32px] capitalize font-bold mb-2 mx-[30%] my-[100px] justify-center" >
      Formulario de Prestamo
    </label>
  </h1>
  @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('prestamos.store') }}"
    class="w-full max-w-lg mx-auto my-[50px]"
    method="post">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full  px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Libro : 
          </label>
          <div class="relative">
            @isset ($libro)
              <input name="libro_id" type="hidden" value="{{ $libro->id }}">
            @endisset
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
              text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
              focus:bg-white focus:border-gray-500" 
              id="grid-state"
              name="libro_id"
              @isset($libro)
                value="{{ $libro->id }}"
              @endisset
              @isset($libro)
                disabled
              @endisset
            >
              @isset($libro)
                <option selected value="{{ $libro->id }}">
                  {{ $libro->titulo }}
                </option>
              @endisset
              @foreach ($libros as $libro)
                <option value="{{ $libro->id }}">
                  {{ $libro->titulo }}
                </option>
              @endforeach                 
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full  px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Ingresa el usuario : 
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
              text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none
              focus:bg-white focus:border-gray-500" 
              id="grid-state"
              name="user_id"
            >
              @foreach ($users as $user)
                <option value="{{ $user->id }}"> {{ $user->name }}</option>
              @endforeach                 
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Fecha del prestamo : 
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-autor" 
            minDate="{{now()}}"
            type="date" 
            value="{{ \Carbon\Carbon::now() }}"
            placeholder="Fecha de prestamo"
            name="fecha_prestamo"
            >
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Fecha de Devolución: 
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-devolución" 
            minDate="{{now()}}"
            type="date" 
            value="{{ \Carbon\Carbon::now() }}"
            placeholder="Fecha de devolución"
            name="fecha_devolucion"
            >
        </div>
          
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Disponibilidad: 
          </label>
          @if ($libro->disponible == 1)
            <span style="position:relative" class="bg-green-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
              Disponible 
            </span>
          @else
            <span style="position:relative" class="bg-red-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
              No disponible      
            </span>
          @endif
        </div>
      </div>
      <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        type='submit'>
        Prestar Libro
      </button>
  </form>
</body>
</html>