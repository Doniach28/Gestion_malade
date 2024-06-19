function confirme(identifiant){

    var confirmation = confirm("Voulez vous vraiment supprimer cet enregistrement ?") ;
    if( confirmation ) 
    document.location.href="supprimer2.php?code="+identifiant;
 }