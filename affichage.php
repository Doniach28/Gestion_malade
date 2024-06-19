<?php
    include("connect.php");
    //Appel de la fonction de connexion
    $bdd=maConnexion();
    // Exécution de la requete de sélection et récupération du rés
    $reponse = $bdd->query('SELECT*FROM mal')
    or die ($bdd->errorInfo()[2]);
    //Affichage du nombre d'inscriptions 
    echo "<p> Nombre d'inscription:".$reponse->rowCount()."<p>";
    //Boucle d'affichage 
    while ($ligne = $reponse->fetchObject()){
    ?>
    <p>
        Nom: <?php echo $ligne->nom; ?> </br>
        Prenom: <?=$ligne->prenom; ?> </br>
        Email: <?=$ligne->email; ?> </br>
        Adresse: <?=$ligne->adresse; ?></br>
    </p> <hr/>
    <?php
   } //fin  while 
   // terminer le traitement de la requete et liberer la mémoire 
   $reponse->closeCursor();
   //fermer la connexion 
   $bdd=null; ?>