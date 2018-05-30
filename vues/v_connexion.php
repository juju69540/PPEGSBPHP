<div id="contenu">
      <!-- <h2>Identification utilisateur</h2> -->

<!-- <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
      <div class="connexion">
            <p>
                  <label for="nom">Login*</label>
                  <input id="login" type="text" name="login"  size="30" maxlength="45">
            </p>
            <p>
                  <label for="mdp">Mot de passe*</label>
                  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
            </p>
            <input type="submit" value="Valider" name="valider">
            <input type="reset" value="Annuler" name="annuler"> 
            </p>
      </div>
</form> -->

<div class="wrap">
		<div class="avatar">
      <img src="http://mattera.ovh/wp-content/uploads/2017/10/logo-gsb-300x186.png"></br></br>
		</div>
      <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
            <div class="connexion">
                  <input class="form-control" id="login" type="text" name="login"  size="30" maxlength="45" placeholder="username">
                  <input class="form-control" id="mdp"  type="password"  name="mdp" size="30" maxlength="45" placeholder="password"></br></br>
            </div>
		<button class="btn btn-success" type="submit" value="Valider">Valider</button>
      </form>
	</div>

</div>