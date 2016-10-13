<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 13/10/2016
 * Time: 12:56
 */

ini_set('display_errors', 'on');
error_reporting(E_ALL);


require ("db.php");


$req2 = $db->prepare("SELECT * FROM test");
$req2->execute(array(

));

while($do = $req2->fetch() ) {

    ?>

<div>
    <h2>Nom du projet : <?php echo $do['name'] ?></h2>
    <a href="select.php?id=<?php echo $do['id']?>">Modifier le projet</a>
    <a href="projet.php?id=<?php echo $do['id']?>">Consulter le projet</a>
</div>



<?php } ?>
