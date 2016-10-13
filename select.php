<?php
/**
 * Created by PhpStorm.
 * User: mathieurella
 * Date: 13/10/2016
 * Time: 10:48
 */
require ("db.php");
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Auto Recipe</title>
    </head>
<body>

<header>
    <script type="text/javascript">
        function aa()
        {
            var xmlhttp;
            xmlhttp=new XMLHttpRequest();
            xmlhttp.open("POST","update.php?nm="+document.getElementById("t1").value+"&ct="+document.getElementById("t2").value+"&age="+document.getElementById("t3").value+"&id="+document.getElementById("nbprojet").value,false);
            xmlhttp.send(null);
        }
    </script>
</header>
<?php
$id=$_GET["id"];

/*$req = $db->prepare("UPDATE test SET nm = :nm, ct = :ct, age = :age WHERE ID = :id");
$req->execute(array(
    'nm' => $nm,
    'ct' => $ct,
    'age' => $age,
    'ID' => $id
));*/

$req2 = $db->prepare("SELECT * FROM test WHERE id = :id");
$req2->execute(array(
    'id' => $id
));

while($do = $req2->fetch() ) {

    ?>

    <form action="update.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $do["id"];?>" />
        <p>
            <label>Nom du Projet</label>
            <input type=text" name="Projet" />
        </p>

        <p>
            <label><h2>Information Client</h2></label>
            <br/>
            <label>Nom :</label>
            <input type=text" name="name" id="name" value="<?php echo $do["name"];?>" />
            <br/>
            <label>Prénom :</label>
            <input type=text" name="age" id="age"  value="<?php echo $do["age"];?>" />
            <br/>
            <label>Adresse :</label>
            <input type=text" name="city" id="city"  value="<?php echo $do["city"];?>" />
            <br/>
            <label>Mail :</label>
            <input type=text" name="Mail" id="4" />
            <br/>
            <label>Site :</label>
            <input type=text" name="Site" id="5" />
            <br/>
            <label type="text" name="Logo" id="6">Logo</label>
            <input type="file" name="logo" />

        </p>

        <p>
            <label><h2>Pitch / Brief</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="pitch">
</textarea>
        </p>

        <p>
            <label><h2>Cahier des charges</h2></label>
            <br/>
            <input type="file" name="cdc" />
            </textarea>
        </p>


        <p>
            <label><h2>Objectif Projet SMART</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="ObjectifSmart">
</textarea>
        </p>

        <p>
            <label><h2>Équipe projet</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="teamproject">
            </textarea>
        </p>

        <p>
            <label><h2>Équipe client</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="teamclient">
            </textarea>
        </p>

        <p>
            <label><h2>Processus / Outils utilisés</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="process">
            </textarea>
        </p>

        <p>
            <label><h2>Organisation du Projet</h2></label>
            <br/>
            <label type="text" name="cal" id="">Planning</label>
            <input type="file" name="cal" />
            <br>
            <label type="text" name="password" id="">Accès / Password</label>
            <input type="file" name="pass" />
        </p>

        <p>
            <label><h2>Mémoire de l'information</h2></label>
            <br/>
            <label type="text" name="cr" id="">Comptes rendus client</label>
            <input type="file" name="cr" />
            <br>
            <label type="text" name="creu" id="">Comptes rendus réunion</label>
            <input type="file" name="creu" />
            <br>
            <label type="text" name="mailbase" id="">Base mail</label>
            <input type="file" name="mailbase" />
        </p>

        <p>
            <label><h2>Équipe projet</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="ObjectifSmart">
            </textarea>
        </p>

        <p>
            <label><h2>Gestion des Risques</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="ObjectifSmart">
            </textarea>
        </p>

        <p>
            <label><h2>Liste des composants</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="ObjectifSmart">
            </textarea>
        </p>

        <p>
            <label><h2>Matrice de test</h2></label>
            <br/>
            <textarea rows="4" cols="50" type="text" name="ObjectifSmart">
            </textarea>
        </p>

        <p>
            <label><h2>Fiche de recettage</h2></label>
            <br/>
            <input type="file" name="ficherecette" />
            </textarea>
        </p>

        <input type="submit" value="Mettre à jour" name="submit" />
        <input type="button" value="save data" name="Save" onClick="aa(); "/>
    </form>


    <?php
    $do->closeCursor();
}

?>





</body>
</html>
