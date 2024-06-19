<SCRIPT src="formulaire.js"></SCRIPT>
<?php
include("connect.php");
$bdd = maConnexion();
$sql = "SELECT * FROM mal ORDER BY Id" ;
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
echo"<p>Nombre de produit:". $reponse->rowCount()."</p>";
?><table><tr><th>Code</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Adresse</th><th>Suppression</th></tr>
<?php
while($enregistrement=$reponse->fetchObject()){
echo "<tr>";
echo "<td> $enregistrement->id</td> ";
echo "<td> $enregistrement->nom</td> ";
echo "<td> $enregistrement->prenom</td> ";
echo "<td> $enregistrement->email</td> ";
echo "<td> $enregistrement->adresse</td> ";

echo("<td><a href='#'onClick='confirme($enregistrement->id)'>supprimer</a></td>");
echo "</tr>";} ?> </table>
