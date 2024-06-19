<?php
if (isset($_REQUEST['code']) && !empty($_REQUEST['code']))
$code=$_REQUEST['code'];
else die ("<p>Id non defini</p>");
if(!is_numeric($code))
die("<p>Veuillez saisir un code numerique</p>");
include("connect.php");
// Appel de la fonction de connexion
$bdd = maConnexion();
// Appel de la fonction de connexion
$sql="SELECT*FROM mal WHERE Id=".$bdd->quote($code);
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
$enregistrement=$reponse->fetchObject();
 if ($reponse->rowCount()==0)

echo"<p class='temps'>Eregistrement non existant >";
else
{ ?>
<link rel="stylesheet" href="#">
<form Method="POST" Action="maj2.php" name="form1">
<p><input type="hidden" name="Id" value="<?PHP echo $code; ?>" /></p>
<table class="Tableau">
<tr> <td class="temps">Nom : </td> <td><input type="text" size="30" name="nom"
value="<?=$enregistrement->nom;?>"/></td></tr>
<tr> <td class="temps">Prénom : </td> <td><input type="text" size="30" name="prenom"
value="<?=$enregistrement->prenom;?>"/></td></tr>
<tr> <td class="temps">E-mail : </td> <td><input type="text" size="30" name="email"
value="<?=$enregistrement->email;?>"/></td></tr>
<tr> <td class="temps">Adresse: </td> <td><input type="text" size="30" name="adresse"
value="<?=$enregistrement->adresse;?>"/></td></tr>

<tr>
<td colspan="2"><input  type="submit"
value="Envoyer" name="Send"> <input type="reset" name="Submit"
value="R&eacute;tablir"></td> </tr> </table> </form> <?php } ?>
<style> 
form {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: 0 auto;
}

.Tableau {
  border-collapse: collapse;
  margin-top: 20px;
}

.temps {
  font-size: 1.2rem;
  font-weight: bold;
  padding-right: 10px;
}

input[type="text"] {
  padding: 0.5rem;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 1rem;
  font-size: 1rem;
}

input[type="submit"],
input[type="reset"] {
  background-color: #13C5DD;
  color: #fff;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-size: 1rem;
  margin-top: 10px;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #13C5DD;
}

</style>