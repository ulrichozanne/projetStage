<!DOCTYPE html>
<html>
<head>
	<title>Tableau</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">


<style>
@import url('https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap');
</style>


<?php

include("bddconnexion.php");
 ?>


</head>



<body>


<h1>Tableau évaluation</h1>


Prénom :<input type="text" name="prenom" placeholder="Prénom">
Nom :<input type="text" name="nom" placeholder="Nom">
Date :<input type="date" name="Date">


	<table>
		<tr>
			<th>Sous domaine</th>
			<th>EP</th>
			<th>EI</th>
			<th>Compétences non acquises</th>
			<th>Activités préconisées / ressources</th>
		</tr>

		<tr>
			<th>7-1</th>
			<th><input type="checkbox" name="EPa"></th>
			<th><input type="checkbox" name="EPa"></th>
			<th>[REQUETE PHP SQL]</th>
			<th>[REQUETE PHP SQL]</th>
		</tr>
	</table>

</body>
</html>