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
            <thead class="border-b font-medium">
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
                <tr class="border-b">
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
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>