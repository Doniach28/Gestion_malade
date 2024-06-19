<link href="style1.css" rel="stylesheet">

<div id="login-box">
  <div class="left">
  <form action="inscription2.php" method="POST" name="form1">
    <h1>Formulaire d'inscription</h1>
    
    <input type="text" name="NCIN" placeholder="N°CIN" />
    <input type="text" name="Nom" placeholder="Nom" />
    <input type="text" name="Prenom" placeholder="Prénom" />
    <input type="text" name="Email" placeholder="E-mail" />
    <input type="text" name="Login" placeholder="Login" />
    <?php
            include("connect.php");
            include("BDoperations.php");
            $bdd=maConnexion();
            //affichage_etablissement($bdd);
            ?>

    <input type="password" name="Motdepasse" placeholder="Password" />
    
    
    <input type="submit" name="signup_submit" value="Envoyer" />
    
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OU</div>
</div>
</form>

