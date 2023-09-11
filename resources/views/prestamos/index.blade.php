<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold mx-[auto] my-[20px] pt-[20px] text-center">
    Tabla de Prestamos
  </h1>
<div class="flex w-full justify-center">
  <div class=" w-[400px] my-[20px] text-white text-center font-bold py-2 px-4 rounded">
    <a href="{{ route('prestamos.create') }}" class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-[50px] rounded"
    >Solicitar Prestamo</a>
  </div>
  <div class=" w-[400px] my-[20px] text-24 text-white text-center font-bold py-2 px-4 rounded">
    <a href="{{ route('libros.index') }}" class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-[50px] rounded"
    >Ver Libros</a>
  </div>
</div>
  
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-center text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">Titulo del Libro</th>
                <th scope="col" class="px-6 py-4">Datos de usuario</th>
                <th scope="col" class="px-6 py-4">Fecha de Prestamo</th>
                <th scope="col" class="px-6 py-4">Fecha de Devolución</th>
                <th scope="col" class="px-6 py-4">Status</th>
                <th scope="col" class="px-6 py-4">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($prestamos as $prestamo)
                <tr class="border-b dark:border-neutral-500">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">
                    {{ $prestamo->libro->titulo }}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4">
                    {{ $prestamo->user->name }}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4">
                    {{ $prestamo->fecha_prestamo }}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4">
                    {{ $prestamo->fecha_devolucion }}
                  </td>
                  <td class="whitespace-nowrap px-6 py-4">
                    @if ($prestamo->status == 1)
                      <span style="position:relative" class="bg-green-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
                        Entregado
                      </span>
                    @else
                      <span style="position:relative" class="bg-red-200 rounded-[10px] px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center">
                        En prestamo                    
                      </span>
                    @endif
                  </td>
                  <td class="whitespace-nowrap px-6 py-4"> 
                    <div class="col-sm">
                      <form action="{{ route('statusPrestamo', $prestamo->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input 
                        type="hidden"
                        value="1"
                        >
                        <button class="bg-red-800 hover:bg-red-900 text-white font-bold font-bold py-2 px-4 rounded"
                        type='submit'>
                        Entregar</button>
                        
                      </form>
                    </div>  
                  </td>
                </tr>


              @endforeach
              <!-- <tr
                class="border-b border-primary-200 bg-primary-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Primary
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-secondary-200 bg-secondary-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Secondary
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-success-200 bg-success-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Status Disponible 
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-danger-200 bg-danger-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Status En prestamo
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-warning-200 bg-warning-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Warning
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-info-200 bg-info-100 text-neutral-800">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Info
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-neutral-100 bg-neutral-50 text-neutral-800 dark:bg-neutral-50">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Light
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr>
              <tr
                class="border-b border-neutral-700 bg-neutral-800 text-neutral-50 dark:border-neutral-600 dark:bg-neutral-700">
                <td class="whitespace-nowrap px-6 py-4 font-medium">
                  Dark
                </td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
                <td class="whitespace-nowrap px-6 py-4">Cell</td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class= "grid w-384 max-w-384 min-w-384 xxs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 px-4">

      @foreach ($libros as $libro) 
      
      <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[auto] my-[100px]">
        <img class="w-full" src="{{URL::asset('books.jpg')}}" alt="bookshelf">
        <div class="px-6 py-4">
          <div style="position: relative;" class="font-bold text-xl mb-2" >{{ $libro->titulo }} <span style="position:relative; width:50px; height:25px;" 
                                                                        class="bg-red-200 rounded-[10px] px-2 justify-end
                                                                               text-[10px] font-semibold text-gray-700  mb-2
                                                                               cursor-pointer text-center"><a  href="{{ route('libros.show', $libro) }}">Ver
                                                                    </a></span>
          </div>
          <div class="font-bold text-xl mb-2">{{ $libro->autor }}</div>
          <p class="text-gray-700 text-base">
            {{ $libro->descripcion }}
          </p>
        </div>
        <div class="grid px-6 pt-4 pb-2">
          <span class="inline-b{{ lock bg-blue-200 roun }}ded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Genero : {{ $libro->genero }} </a></span>
        </div>
        {{-- flex place-content-around --}}
       {{-- <div class="grid px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('createprestamo', $libro->id) }}">Solicitar Prestamo</a></span>
          <span class="inline-block bg-gray-200 rounded-[10px] px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 cursor-pointer text-center"><a href="{{ route('libros.edit', $libro) }}">Actualizar</a></span>
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
  </div> --}}
  
</body>
</html>