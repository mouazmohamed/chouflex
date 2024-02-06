<?php
$connexion = new mysqli("localhost", "nom_de_la_VM", "mot_de_passe_de_la_VM$", "nom_de_la_bdd")
or die("connexion impossible");

$id=$_POST['id'];
$mdp=$_POST['passwd'];
$Requete1="Select * from connexion where id='$id' and passwd='$mdp'";
$Resultat1=$connexion->query($Requete1)
            or die("impossible d'executer la requête".$connexion->error);

if($Resultat1->num_rows >=1)
{
    header("location:connected.html");//redirection vers la page connected.html si la connexion est autorisé
}
else
{
    header("location:notConnected.html");//redirection vers la page notconnected.html si la connexion n'a pas pu aboutir
}
?>