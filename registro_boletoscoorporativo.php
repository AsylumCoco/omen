<?php  

include ("conexion_omen.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$edge = $_POST['edge'];
$boletos = $_POST['boletos'];

$query =  "INSERT INTO registroaccesocoorporativos(name, email, phone, edge, boletos) VALUES ('$name', '$email', '$phone', '$edge', '$boletos')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("location:notificacion.html");
}
else{
	echo "No se inserto nada";
}
?>