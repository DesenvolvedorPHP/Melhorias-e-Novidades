<?php
$q = $_GET["q"];
$usuario = "root";
$pwd = "";
$servidor = "localhost";
$db = "escuela";


$conn = mysqli_connect($servidor, $usuario, $pwd, $db) or die ("Error en la conexión de la base de datos");
$sql = "SELECT * FROM alumnos WHERE nombres regexp '^".$q."' ";
$r = mysqli_query($conn, $sql);
//
while ($data = mysqli_fetch_object($r)) {
	$nombres = $data->nombres;
	$apellidos = $data->apellidos;
	$promedio = $data->promedio;
	print $nombres.", ".$apellidos.", promedio: ".$promedio."<br>";
}
mysqli_close($conn);
