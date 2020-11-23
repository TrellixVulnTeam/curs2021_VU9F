﻿<?php

session_start();
include 'myAdminProductos_library.php';
include 'myAdminComandas_library.php';

for ($c = 0; $c < count($_SESSION["c_id"]); $c++){
	if($_SESSION["c_id_usuario"][$c] == $_SESSION["login"]){
		CompletarComanda($_SESSION["c_id"][$c]);
		SubirDinero(GetInfoProduct("id_usuario", $_SESSION["c_id_producto"][$c]), GetInfoProduct("price", $_SESSION["c_id_producto"][$c]));
	}
}

AltaTransaccion($_SESSION["login"], $_SESSION["precio_total"], 1);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<title>Página privada</title>
	</head>

	<body>

	<a href="publica.php">TO PUBLIC</a>
		
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


	</body>


</html>