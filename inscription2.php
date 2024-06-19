<!DOCTYPE html>
<html>
<head>
<title>Inscription des Patients</title>
<meta charset="utf-8" />
<link href="../../Style/MonStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Inscription des Patients</h1>
<?php
include("connect.php");
include("BDoperations.php");
$bdd=maConnexion();
if (isset($_REQUEST['NCIN']) && !empty($_REQUEST['NCIN']))
$NCIN=$bdd->quote(trim($_REQUEST['NCIN']));
else die ("<p>Donnez NCIN</p>");
if (isset($_REQUEST['Nom']) && !empty($_REQUEST['Nom']))
$Nom=$bdd->quote(trim($_REQUEST['Nom']));
else die ("<p>Donnez Nom</p>");
if (isset($_REQUEST['Prenom']) && !empty($_REQUEST['Prenom']))
$Prenom=$bdd->quote(trim($_REQUEST['Prenom']));
else die ("<p>Donnez Prénom</p>");
if (isset($_REQUEST['Email']) && !empty($_REQUEST['Email']))
$Email=$bdd->quote(trim($_REQUEST['Email']));
else die ("<p>Donnez email</p>");
$arobase = strpos($Email, '@');
$point = strpos($Email, '.');
if( ($arobase < 3) || ( ($point + 2) > strlen($Email) ) )
die ("<p>Email non correctement saisi</p>");

if (isset($_REQUEST['Login']) && !empty($_REQUEST['Login']))
$Login=$bdd->quote(trim($_REQUEST['Login']));
else die ("<p>Donnez login</p>");
if (isset($_REQUEST['Motdepasse']) && !empty($_REQUEST['Motdepasse']))
$Motdepasse=$bdd->quote(md5(trim($_REQUEST['Motdepasse'])));
else die ("<p>Donnez motdepasse</p>");
$date = $bdd->quote(date("Y-m-d H:i:s"));
/* Pour éviter la duplication d'enregsitrement et l'erreur suivante:
// Duplicata du champ 'valeur de NCIN' pour la clef 'PRIMARY'
Il faut s'assurer de l'unicité du code avant l'ajout
*/
ajouter($bdd,$NCIN,$Nom,$Prenom,$Email,$Login,$Motdepasse,$date);
?>
</body>
</html>