<?php  

include ("conexion_omen.php");

$name = $_POST['name']; 

$imagenuno = addslashes(file_get_contents($_FILES['imagenuno']['tmp_name']));


$query =  "INSERT INTO imagencosplay(name, imagenuno) VALUES ('$name', '$imagenuno')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("location:notificacion.html");
}
else{
	echo "No se inserto nada";
}
?>