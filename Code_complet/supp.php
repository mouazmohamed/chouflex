<?php
$connexion = new mysqli("localhost", "nom_de_la_VM", "mot_de_passe_de_la_VM$", "nom_de_la_bdd")
or die("connexion impossible");

$nom=$_POST['nom'];

$Requete1="Delete from serie where nom='$nom'";
$Resultat1=$connexion->query($Requete1)
            or die("Impossible d'executer la requête".$connexion->error);

if($nom == $Resultat1)
{
    header("location:supp_success.html");
}
else
{
    header("location:supp_fail.html");
}
?>