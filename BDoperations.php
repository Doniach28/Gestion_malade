<?php
function get_type($bdd,$idtype){
$query="SELECT designationType FROM type WHERE idType=".$idtype;   //execution 
$reponse =$bdd->query($query) or die ($bdd->errorInfo()[2]);
$cat =$reponse->fetchObject();
return $cat->designationType;
}

function affichage_Des_Malades($bdd){
$requete="SELECT * FROM malade order by NCIN";
$reponse= $bdd->query ($requete) or die ($bdd->errorInfo()[2]);

if ($reponse->rowCount()>0){
    echo "<table border='1'>
    <tr>
      <th> N°CIN</th>
      <th>Nom </th>
      <th> Prénom</th>
      <th>N°tel  </th>
      <th> Adresse </th>
      <th> Email </th>
    </tr>";

while ($enregistrement = $reponse->fetchObject()) {
    echo "<tr>";
    echo "<td> $enregistrement->NCIN</td>";
    echo "<td> $enregistrement->nom</td>";
    echo "<td> $enregistrement->prenom</td>";
    echo "<td> $enregistrement->ntel</td>";
    echo "<td> $enregistrement->adresse</td>";
    echo "<td> $enregistrement->email</td>";
    echo "</tr>";
}
echo "</table>";
}
else echo "<p> La table malade est vide.</p>";
}


 function affichage_etablissement($bdd){
  $query="SELECT * FROM etablissement order by idEtablissement";
  $result= $bdd->query ($query) or die ($bdd->errorInfo()[2]);
  echo "<select name='etablissement'>";
  while ($cat=$result->fetchObject())
  echo "<option value='".$cat->idEtablissement."'>".$cat->nomEtablissement."</option>";
  echo "</select>";
 }

 function ajouter($bdd,$NCIN,$Nom,$Prenom,$Email,$Login,$Motdepasse,$date){
$sql="select NCIN from patient1 where NCIN=$NCIN";
$resultat=$bdd->query($sql) or die ($bdd->errorInfo()[2]);
if ($resultat->rowCount()==0){
$sql2="INSERT INTO patient1 Values ($NCIN,$Nom,$Prenom,$Email,$Login,$Motdepasse,$date)";
$nblignes=$bdd->exec($sql2);
if ($nblignes==1)
echo ("<p>Enseignant ajouté avec succées </p>");
}
else echo ("<p> Enseignant déja existant </p>");
$bdd=null;
 }
 
 
 
 



 





?>