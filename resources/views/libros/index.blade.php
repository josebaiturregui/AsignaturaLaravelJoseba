<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold ">
    Libros
  </h1>
  @foreach ($libros as $libro)

  <div class=" grid max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="books.jpg" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $libro->titulo }}</div>
      <div class="font-bold text-xl mb-2">{{ $libro->autor }}</div>
      <p class="text-gray-700 text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
    </div>
    <div class="grid px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="{{ route('libros.edit', $libro) }}">Actualizar</a></span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="{{ route('libros.edit', $libro) }}">Borrar</a></span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
@endforeach
  Horizontal
  {{-- <table class="table-auto border-separate border-spacing-2 border border-slate-500 ">
    <thead>
      <tr>
        <th  class="border border-slate-600 ...">id</th>
        <th class="border border-slate-600 ...">Titulo</th>
        <th class="border border-slate-600 ...">Autor</th>
        <th class="border border-slate-600 ...">Año de Publicación</th>
        <th class="border border-slate-600 ...">Género</th>
        <th class="border border-slate-600 ...">Disponible</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($libros as $libro)

      <tr class="border border-slate-600 ..."><td class="border border-slate-600 ...">{{$libro->id}}</td>
        <td class="border border-slate-600 ...">{{$libro->titulo}}</td>
        <td class="border border-slate-600 ...">{{$libro->autor}}</td>
        <td class="border border-slate-600 ...">{{$libro->ano_publicacion}}</td>
        <td class="border border-slate-600 ...">{{$libro->genero}}</td>
        <td class="border border-slate-600 ...">{{$libro->disponible}}</td>
        <td class="border border-slate-600 ..."><a href="{{ route('libros.edit', $libro) }}">Editar</a></td>
        <td class="border border-slate-600 ..."><button>Eliminar</button></td></tr>
        

      @endforeach
    </tbody>
  </table> --}}
</body>
</html>