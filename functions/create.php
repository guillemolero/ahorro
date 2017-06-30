<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 30/06/2017
 * Time: 3:05
 */
require_once("../classes/cuenta.php");
require_once("bbdd.php");


//obtenemos los datos que pasamos previamente con AJAX
print_r($_POST);
$ingresosFijos = $_POST['datos'];
$gastosFijos = $_POST['datos'][1];
$ahorro = $_POST['datos'][2];
$vivir = $_POST['datos'][3];
$ocio = $_POST['datos'][4];

//creamos una cuenta con dichos datos
$cuenta = new cuenta($ingresosFijos, $gastosFijos, $ahorro, $vivir, $ocio);

//serializamos el objeto
$cuentaSerializada = serialize($cuenta);

//nos conectamos a la base de datos
$pdo = connect();

//escribimos la consulta de inserción con parámetros
$sql = "INSERT INTO cuentas(objeto) VALUES (?);";

//preparamos la consulta para recibir parametros
$consulta = $pdo->prepare($sql);

//asignamos el objeto serializado
$consulta->bindParam(1, $cuentaSerializada);

//si falla la preparación entra aquí
if ($consulta == false)
{
    print_r($pdo->errorInfo());
    die ('Error en la preparación.');
}

//ejecutamos
$consulta->execute();

//si falla la ejecución entra aqui
if ($consulta == false)
{
    print_r($consulta->errorInfo());
    die ('Error en la ejecución.');
}

