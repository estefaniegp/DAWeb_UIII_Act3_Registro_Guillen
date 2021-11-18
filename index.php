<!DOCTYPE html>
<html>
<head>
	<title>Cinepolis</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellidop" placeholder="Apellido paterno">
		<input type="text" name="apellidom" placeholder="Apellido materno">
		<input type="text" name="rfc" placeholder="RFC">
    	<input type="email" name="correo" placeholder="Correo electrónico">
    	<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>