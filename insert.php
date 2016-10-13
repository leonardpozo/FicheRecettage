<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 12/10/2016
 * Time: 13:41
 */

require ("db.php");

$nm=$_GET["nm"];
$city=$_GET["ct"];
$age=$_GET["age"];
$id="";

$db->query("INSERT INTO test VALUES('$id','$nm','$city','$age')");

/*mysql_connect("localhost","root","root");
mysql_select_db("testing");
mysql_query("insert into test values('$id','$nm','$city','$age')");*/

