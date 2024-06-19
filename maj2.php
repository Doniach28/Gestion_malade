

<?php
include("connect.php");
// Appel de la fonction de connexion
$bdd = maConnexion();
if (isset($_REQUEST['nom']) && !empty($_REQUEST['nom']))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>Nom non defini ou saisi</p>");

if (isset($_REQUEST['prenom']) && !empty($_REQUEST['prenom']))
$prenom=$bdd->quote($_REQUEST['prenom']);
else die ("<p>Prenom non defini ou saisi</p>");

if (isset($_REQUEST['email']) && !empty($_REQUEST['email']))
$email=$bdd->quote($_REQUEST['email']);
else die ("<p>Email non defini ou non saisi</p>");
$arobase = strpos($email, '@'); $point = strpos($email, '.');
if( ($arobase < 3) || ( ($point + 2)> strlen($email) ) )
die ("<p>Email non correctement saisi</p>");

if (isset($_REQUEST['adresse']) && !empty($_REQUEST['adresse']))
$adresse=$bdd->quote($_REQUEST['adresse']);
else die ("<p>Adresse non defini ou non saisi</p>");




$code=$bdd->quote($_REQUEST['Id']);
$requete=" UPDATE mal SET Nom=$nom, Prenom=$prenom, Email=$email, Adresse=$adresse  WHERE Id=$code";
$nblignes=$bdd->exec($requete);
if($nblignes!=1)
die("<p> Impossible d'effectuer la requete!".$bdd->errorInfo()[2]."</p>");

else
echo "<p class='temps'>Enregistrement modifie avec succes! </p>";
$requete1="select * from mal where Id = $code";
$reponse1 = $bdd->query($requete1);
$ligne = $reponse1->fetchObject();
?> <p>Nom:<?php echo $ligne->nom;?><br />
Prénom:<?php echo $ligne->prenom;?><br/>
Email:<?php echo $ligne->email;?><br />
Adresse:<?php echo $ligne->adresse;?><br />
</p>
<?php $bdd=null; ?>