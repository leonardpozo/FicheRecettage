<?php
require ("db.php");
if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
    && isset($_POST['password']) && !empty($_POST['password'])
    && isset($_POST['email']) && !empty($_POST['email'])
){ /* stockage des données*/
    $request = $db->prepare('INSERT INTO login (pseudo, password, email) VALUES(:pseudo,:password,:email)');
    $request->execute(
        array(
            'pseudo'=>$_POST['pseudo'],
            'password'=>$_POST['password'],
            'email'=>$_POST['email']
        )

    );
    echo 'Profil créé';

}

?>


<form action="register.php" method="post">
    <input type="text" name="pseudo" placeholder="Pseudo" required/>
    <input type="password" name="password" placeholder="Mot de passe" required/>
    <input type="text" name="email" placeholder="Adresse email" required/>
    <input type="submit" Value="S'inscrire"/>
</form>