<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 13/10/2016
 * Time: 13:28
 */

ini_set('display_errors', 'on');
error_reporting(E_ALL);


require ("db.php");
$id_projet = $_GET["id"];

$req2 = $db->prepare("SELECT * FROM test WHERE id = $id_projet");
$req2->execute(array(

));

while($do = $req2->fetch() ) {

    ?>

    <div>
        <h2>Nom du projet : <?php echo $do['name'] ?></h2>
        <p>Age : <?php echo $do['age'] ?></p>
        <p>City : <?php echo $do['city'] ?></p>
        <a href="select.php?id=<?php echo $do['id']?>">Modifier le projet</a>
        <a href="liste.php">Retour</a>
    </div>

    <form action="projet-pdf.php" method="post">
        <input type="hidden" name="Projet" value="<?php echo $do['name'] ?>">
        <input type="hidden" name="t1" value="<?php echo $do['age'] ?>">
        <input type="hidden" name="t2" value="<?php echo $do['city'] ?>">
        <input type="submit" value="Generer un document" name="submit" />
    </form>

<?php } ?>
