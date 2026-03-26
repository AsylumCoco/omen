<?php  

include ("conexion_omen.php");

$name = $_POST['name']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$edge = $_POST['edge'];
$imagenuno = addslashes(file_get_contents($_FILES['imagenuno']['tmp_name']));


$query =  "INSERT INTO registrocosplay(name, email, phone, edge, imagenuno) VALUES ('$name', '$email', '$phone', '$edge', '$imagenuno')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("location:notificacion.html");
}
else{
	echo "No se inserto nada";
}
?>