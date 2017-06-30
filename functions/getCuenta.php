<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 30/06/2017
 * Time: 4:33
 */
require_once("../classes/cuenta.php");
require_once("bbdd.php");

//conectamos la base de datos
$pdo = connect();

//escribimos la consulta que deseamos hacer
$sql = "SELECT id, objeto FROM cuentas WHERE id = '20';";

//preparamos la consulta
$consulta = $pdo->prepare($sql);

//control de errores de preparación
if ($consulta == false)
{
    print_r($pdo->errorInfo());
    die ('Error en la preparación.');
}

//ejecutamos la consulta
$consulta->execute();

//control de errores de ejecución
if ($consulta == false)
{
    print_r($consulta->errorInfo());
    die ('Error en la ejecución.');
}

//asignamos a una variable los resultados
$retorno = $consulta->fetch();

//deserializamos el objeto obtenido en una variable, creando así el objeto cuenta
$cuenta = unserialize($retorno['objeto']);

//comprobamos que es funcional
print_r($cuenta);

