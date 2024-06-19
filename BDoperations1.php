<?php
function ajouter($bdd,$NomPrenom) {
$requete="INSERT INTO malade1 VALUES(NULL ,$NomPrenom)";
$nblignes=$bdd->exec($requete);
if ($nblignes!=1)
die("<p>Impossible d'effectuer la requete! ".$bdd->errorInfo()[2]."</p>");
else
echo "<h3> $NomPrenom ajouté avec succès.</h3>";
}
?>