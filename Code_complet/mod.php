<?php
$connexion = new mysqli("localhost", "nom_de_la_VM", "mot_de_passe_de_la_VM$", "nom_de_la_bdd")
or die("connexion impossible");

$nom=$_POST['nom'];
$gen=$_POST['gen'];
$rea=$_POST['rea'];
$ann=$_POST['ann'];
$sai=$_POST['sai'];
$epi=$_POST['epi'];
$img="null";

$Requete1="UPDATE serie SET nom = $nom, genre = $gen, realisateur = $rea, annee = $ann, saison = $sai, episode = $epi, duree = $dur, img = $img; WHERE nom = $nom;";
$Resultat1=$connexion->query($Requete1)
            or die("Impossible d'executer la requête".$connexion->error);

if($nom == $Requete1)
{
    header("location:mod_success.html");
}
else
{
    header("location:mod_fail.html");
}
?>