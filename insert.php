<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 12/10/2016
 * Time: 13:41
 */

$nm=$_GET["nm"];
$city=$_GET["ct"];
$age=$_GET["age"];


mysql_connect("localhost","root","root");
mysql_select_db("testing");
mysql_query("INSERT INTO test VALUES('$nm','$city','$age')");

?>