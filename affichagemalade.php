<?php
include("connect.php");
include ("BDoperations.php");
$bdd=maConnexion();

affichage_Des_Malades($bdd);

?>