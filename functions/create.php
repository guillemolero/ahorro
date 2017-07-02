<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 30/06/2017
 * Time: 3:05
 */

print_r($_POST);

$ingresos = $_POST['ingresos'];
$gastos = $_POST['gastos'];
$ahorro = $_POST['ahorro'];
$vivir = $_POST['vivir'];
$ocio = $_POST['ocio'];

echo $ingresos;
echo $gastos;
echo $ahorro;
echo $vivir;
echo $ocio;