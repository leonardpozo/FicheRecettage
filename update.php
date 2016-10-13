<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 13/10/2016
 * Time: 11:43
 */
ini_set('display_errors', 'on');
error_reporting(E_ALL);


require ("db.php");

$id=$_POST["id"];
$nm=$_POST["name"];
$city=$_POST["city"];
$age=$_POST["age"];

/*echo $id;
echo $nm;
echo $city;
echo $age;*/

$req = $db->prepare("UPDATE test SET
      name = :nametruc,
      age = :age,
      city = :city
      WHERE id = :id");


$req->execute(array(
    ':id' => $id,
    ':nametruc' => $nm,
    ':city' => $city,
    ':age' => $age
));

