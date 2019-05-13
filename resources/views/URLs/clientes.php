
// Obtenemos el nombre del usuario desde la URL
$id = $_GET['id'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Ejemplo de URL amigable</title>
</head>
<body>
  <h1>Ahora estás en clientes.php</h1>
  <p>Nombre del cliente: <?php echo $id; ?></p>
</body>
</html>