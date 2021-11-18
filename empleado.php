<?php 
//Estefanie Guillén Pérez
include("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidop']) >= 1 && strlen($_POST['apellidom']) >= 1 && strlen($_POST['rfc']) >= 1 && strlen($_POST['correo']) >= 1) {

	    $nombre = trim($_POST['nombre']);
		$apellidop = trim($_POST['apellidop']);
		$apellidom = trim($_POST['apellidom']);
		$rfc = trim($_POST['rfc']);
	    $correo = trim($_POST['correo']);

	    $consulta = "INSERT INTO registro(nombre, apellidop, apellidom, rfc, correo) VALUES ('$nombre','$apellidop', '$apellidom','$rfc', '$correo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups, ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>