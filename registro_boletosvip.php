<?php  

include ("conexion_omen.php");

$name = $_POST['name']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$edge = $_POST['edge'];
$folio1 = $_POST['folio1'];
$folio2 = $_POST['folio2'];
$imagenuno = addslashes(file_get_contents($_FILES['imagenuno']['tmp_name']));

$query = "INSERT INTO registrovip(name, email, phone, edge, folio1, folio2, imagenuno) VALUES ('$name', '$email', '$phone', '$edge', '$folio1', '$folio2', '$imagenuno')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("location:confirmacion.html");
}
else{
	echo "No se inserto nada";
}
?>