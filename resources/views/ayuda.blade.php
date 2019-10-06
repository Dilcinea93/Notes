@extends('layouts.layout')
@section('title','Ayuda')

@section('content')
<h1>Como anexar capturas de pantalla en las publicaciones?</h1>
<ol>
    <li>Toma la captura de pantalla con tu programa favorito y guardala en el siguiente directorio: projects/guias/public/img/ con el nombre que quieras. (Eso para el caso de mi ambiente local.... luego vere como se hace cuando este en el servidor)</li>
    <li>Ve a la publicacion, selecciona el icono de imagen, y usa este formato <b>http://localhost/projects/guias/public/img/nombre_de_imagen.png</b> para vincular a la imagen que guardaste en el directorio. Asegurate de que el protocolo se <b>HTTP</b> (en el caso de mi ambiente local)</li>
</ol>
@endsection



