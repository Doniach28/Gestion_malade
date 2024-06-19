<?php
include("connect.php");
$bdd = maConnexion();
$code=$bdd->quote($_REQUEST["code"]);
$sql="DELETE FROM mal WHERE id=".$code;
$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
die ("<p> Impossible d'effectuer la requete! ".$bdd->errorInfo()[2]."</p>");
else {
   echo "<p class='temps'>Enregistrement supprime avec succes! </p>";
   echo "<script>";
   echo "window.location.replace('supprimer.php')";
   echo "<script>";
}
$bdd=null;
?>