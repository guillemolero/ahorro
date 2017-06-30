<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 30/06/2017
 * Time: 3:04
 */
require_once("classes/cuenta.php");
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input id="ingresosFijos" type="number">
    <br>
    <input id="gastosFijos" type="number">
    <br>
    <input id="ahorro" type="number">
    <br>
    <input id="vivir" type="number">
    <br>
    <input id="ocio" type="number">
    <br>
    <button id="crearCuenta">crear</button>

<br>
<div id="resultado">

</div>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/main.js"></script>
</html>