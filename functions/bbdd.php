<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 30/06/2017
 * Time: 3:47
 */

function connect()
{
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=ahorro;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Error : '.$e->getMessage());
    }

    return $pdo;
}