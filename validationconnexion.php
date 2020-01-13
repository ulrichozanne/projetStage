<!DOCTYPE html>
<html>
<head>
	<title>validationconnexion</title>


<style>
     @import url('https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap');
</style>



</head>

<?php

include("bddconnexion.php");

 ?>


<body>

<br>
<br>
<br>

<?php 


$login = $_POST['login'];

$mdp = $_POST['mdp'];


$req = $bdd->prepare('SELECT idUtilisateur,login, FROM utilisateur WHERE login = :login AND  mdp = :mdp');

$req->execute(array(
    'login' => $login,
    'mdp' => $mdp
));

$resultat = $req->fetch();




if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !' ;
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['idUtilisateur'];
        $_SESSION['session'] = $login;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe ! A';
        echo $login;
        echo $mdp;
    }
}

?>



</body>
</html>