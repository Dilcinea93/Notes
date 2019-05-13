@extends('layouts.layout')
@section('title','Informacion')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<center>
			<h3>Sobre el uso de la herramienta.</h3></center>
		</div>
		<div class="panel-body">
			<ul>
				<li>CREACION DE URL PARA OTROS SITIOS WEB</li>
				<li>ANEXAR CAPTURAS DE PANTALLA A LAS PUBLICACIONES</li>
				<LI>CREACION DE LINKS INTERNOS HACIA OTROS POSTS DEL SISTEMA.</LI>
				<LI>RESPALDO DE BASE DE DATOS</LI>
			</ul>


			<h3>CREACION DE URL PARA OTROS SITIOS WEB</h3>
			<p> El sistema nos permite introducir URL que vinculan a otros sitios web de manera que complementen la información agregada y personalizada en el sitio. Para esto hacer click en el boton LINK del editor <img src="{{asset('img/link.png')}}"> para agregar la URL del sitio al que queremos hacer referencia, junto con un texto que sera mostrado por pantalla. Solo copia y pega el link de tu barra de direcciones! </p>

			<h3>ANEXAR CAPTURAS DE PANTALLA A LAS PUBLICACIONES</h3>
			<p>
				Para introducir capturas de pantalla puedes obviamente utilizar tu aplicacion favorita para capturas de pantalla, solo que la imagen debe ser guardada en el directorio <b><span style="color:green;">http://</span>host/guias/public/img/nombre-imagen.png</b>
				<span style="color:red;">NOTA: </span> <b>Debes introducir el protocolo de tu servidor. HTTP o HTTPS:// de lo contrario no podras ver la captura de pantalla</b>
			</p>


			<h3>CREACION DE LINKS INTERNOS HACIA OTROS POSTS DEL SISTEMA.</h3>
			<p>
				Para este paso nuevamente hay que presionar la opcion <b>LINK</b> del editor <img src="{{asset('img/link.png')}}"> y en la URL introducir la URL del post al que queremos hacer referenecia. Vamos a nuestro pos, tomamos su URL desde el navegador (como se haria con cualquier otro sitio en internet) y lo pegamos. Igual que como haciamos en el punto 1.

				Como este sistema se trata de registrar conocimientos y hacer una especie de cuaderno digital, si eres desarrollador tienes la opcion de hacer tus practicas de código en nuevos documentos dentro del servidor, y referenciarlos con una URL como esta: <b>host/guias/resources/<span style="color:red;">views</span>
					/nombre-documento.php </b>  , porsupuesto habiendo guardado previamente tu nuevo documento en el directorio <span style="color:red;">VIEWS</span>. Si quieres tener los documentos del sistema mas organizados, puedes crear un nuevo directorio dentro de VIEWS, pero entonces tambien tendrias que agregar el nombre de tu directorio a tu URL.

					En caso contrario tienes la opcion de <b>utilizar el boton pre</b> para escribir codigo en el mismo editor del sistema y verlo en tu post con una escritura mas legible. 

					Hago mencion a todo esto para el caso de los que somos desarrolladores o aprendices de nuevas tecnologías de programación. Pero el sistema en general fué creado pensando en ahorrarnos buscar papel y lapiz para anotar cosas nuevas, interesantes que aprender, y pues facilitar la busqueda de esas anotaciones que aveces se nos olvida donde lo escribimos ;)
			</p>



			<h3>RESPALDO DE BASE DE DATOS.</h3>

			<p>
				La sección de respaldo se hizo pensando en el caso de que no haya conexion a internet o por alguna razon (de conexion) no podamos acceder a las anotaciones que hayamos hecho. Con hacer click en el boton de respaldo se descargara el archivo de la base de datos de nuestro sistema, con todo lo que hemos anotado. Si queremos pasar el sistema a un hosting nuevo, podemos hacer respaldo antes de cambiarnos, y luego importar la base de datos para seguir teniendo a mano todas nuestras anotaciones de forma accesible y todas en un mismo lugar. Es la idea de este sistema.
			</p>
		</div>
	</div>
@endsection