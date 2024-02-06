<?php
$connexion = new mysqli("localhost", "nom_de_la_VM", "mot_de_passe_de_la_VM$", "nom_de_la_bdd")
or die("connexion impossible");

$nom=$_POST['nom'];
$gen=$_POST['gen'];
$rea=$_POST['rea'];
$ann=$_POST['ann'];
$sai=$_POST['sai'];
$epi=$_POST['epi'];
$dur=$_POST['dur'];
$img="null";

$Requete1="INSERT INTO serie(nom, genre, realisateur, annee, saison, episode, duree, img) values ('$nom', '$gen', '$rea', '$ann', '$sai', '$epi', '$dur', '$img');";
$Resultat1=$connexion->query($Requete1)
            or die("Impossible d'executer la requête".$connexion->error);

if($nom && $gen && $rea && $ann && $sai && $epi && $dur && $img == $Resultat1)
{
   header("location:ajouter_success.html");
}
else
{
   header("location:ajouter_fail.html");
}
?>