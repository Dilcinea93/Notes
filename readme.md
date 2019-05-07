El anterior trabajo es desarrollado inspirado en la necesidad de algunas personas de tener acceso rapido a la informacion de uso mas común en el dia a dia, permitiendo escribir y resaltar aquellas ideas o frases mas resaltantes (o bien, el texto que prefieras resaltar). A modo de "cuaderno digital", el sistema cuenta con un mini buscador que permite realizar busquedas de palabras determinadas, que el usuario conozca y sepa que estan relacionadas con el articulo a localizar, tambien facilita el acceso a un traductor (pagina oficial de reverso.com) en la que localizar rapidamente esta herramienta para traducir textos o palabras en ingles al leer documentacion en ingles o estudiar con tutoriales en ingles. 

La idea es utilizar menos lapiz y papel para anotar ideas o aprendizajes nuevos, y poder ubicar todas las anotaciones en un mismo lugar y asi evitar la molestia de buscar tus cuadernos para ver donde anotaste alguna idea, la cual "sabes que escribiste pero no recuerdas donde", ademas de brindar una herramienta que permita que aun sin conexion a internet se pueda consultar, leer los posts ya publicados y asi repasar tus conocimientos.

Se basa en un crud sencillo que cumple con la funcion mencionada. Haciendo uso de librerias como CKeditor para Jquery, Laravel/debugbar, laravel/Backup y obviamente una base de datos local.

Se continua optimizando y haciendo crecer la idea, para quienes les guste. Para mi ha sido de utilidad.

En la version actual del desarrollo, los links para hacer referencia a un documento de codigo, pueden referenciarse usando la siguiente ruta para generar un vinculo HTTP: 
http://localhost/guias/resources/views/nombre-del-archivo.php

Estos archivos no utilizan blade, por lo que vincular a hojas de estilo se hace de la siguiente forma:

    <link href="http://localhost/guias/public/css/bootstrap.min.css" rel="stylesheet">
