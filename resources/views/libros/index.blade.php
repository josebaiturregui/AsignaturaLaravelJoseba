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
  <table class="table-auto border-separate border-spacing-2 border border-slate-500 ">
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
        <td class="border border-slate-600 ..."><button>Editar</button></td>
        <td class="border border-slate-600 ..."><button>Eliminar</button></td></tr>
        

      @endforeach
    </tbody>
  </table>
</body>
</html>