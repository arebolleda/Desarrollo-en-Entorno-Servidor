<!DOCTYPE HTML>
<?php
include('funciones.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado Historico</title>
</head>
<body>
	<h1>Listado Historico</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<p>Departamento</p>
		<?php
			mostrarSelect();
			echo "<br>";
			echo "<br>";
		?>
		   <input type="submit" name="submit" value="Listado Historico"/>
	</form>
</body>
</html>
<?php
	/* var_dump($_POST); */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valor1 = limpieza($_POST["departamento"]);
	
	$departamento=$valor1;
	$conexion=crear_conexion();

	listadoHistorico($conexion,$departamento);
	
}
?>
