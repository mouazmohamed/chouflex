<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/chouflex.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comédie - ChouFlex™</title>
</head>
<body>

	<!-- Haut de page -->
	<header> 
		<a href="accueil.html"><img class="logo" src="img_vid/logo.png" width="150"></a><!-- Cliquer sur le logo pour aller à la page d'accueil -->
		<div style="display:inline-block;">
		</div>

	<!-- Menus de navigation -->
	<nav class="menu" align="center">
		<ul>
			<li class="btn">
				<a href="accueil.html">
				Accueil<!-- Page d'accueil -->
				</a>
			</li>
			<li class="btn">
				<a href="horreur.php">
				Horreur<!-- Page horreur -->
				</a>
			</li>
			<li class="btn">
				<a href="comedie.php">
				Comédie<!-- Page comédie -->
				</a>
			</li>
			<li class="btn">
				<a href="manga.php">
				Manga<!-- Page manga -->
				</a>
			</li>
			<li class="btn">
				<a href="login.html">
				Ajouter<!-- Page de connexion ou de création de compte, puis on peut ajouter des séries sur la page ajouter.html -->
				</a>
			</li>
		</ul>
	</nav>
	</header>
	<br>
	<h1 class="comedie" align="center">
		<u>Liste des séries Comédie</u>
	</h1>
	<br>
	<p class="comedie">
	<div id="horreur" align="center">
		
		<?php
			$connexion = new mysqli("localhost", "nom_de_la_VM", "mot_de_passe_de_la_VM$", "nom_de_la_bdd")
			or die("connexion impossible");

			$requete1= "select * from serie where genre='Comédie';";
			$resultat1= $connexion->query($requete1);


			while($ligne=$resultat1->fetch_assoc())
			{
				extract($ligne);
				echo "<div class=mlm><br>
				<u>$nom</u> <br><br> <img src='bdd/img/$img'> <br><br>
				</div><br><br>";
				echo "<div class=mlmr><br>
				<u>Nom :</u> $nom<br>
				<u>Genre :</u> $genre<br>
				<u>Nom du réalisateur :</u> $realisateur<br>
				<u>Année de sortie :</u> $annee<br>
				<u>Nombre de saisons :</u> $saison<br>
				<u>Nombre d'épisode :</u> $episode<br>
				<u>Durée d'un épisode :</u> $duree<br><br>
				</div><br><br><br>";
            }
		?>
		</div>
	</div>		
	</p>
	<br>
	<br>
	<!-- Pied de page -->
	<footer>
		Copyright© 2023 | ChouFlex SAS | All rights reserved.<br/>
		Cofondateurs du site internet ChouFlex™ : Mouaz | Sofiane | Naïm<br/>
		1BTSS2I ~ Projet SLAM
	</footer>

</body>
</html>