    <!-- Division pour le sommaire -->
    <!-- <div id="menuGauche">   -->
        <!-- <ul id="menuList"> -->

      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <li class="navbar-brand">
				  Visiteur :
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
    </div>
    <ul class="nav navbar-nav">
			<!-- <li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li> -->
            <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
            </li>
            <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
            </li>
		   <?php
			if($pdo->Gestionnaire($_SESSION['idVisiteur'])){
				echo '<li class="smenu">
					<a href="index.php?uc=modifierFrais&action=voirForfait" title="Modifier forfaits">Modifier forfaits</a>
					</li>';
				}
			?>
			<li class="smenu">
              <a href="index.php?uc=visiteur&action=lesVisiteurs" title="lesVisiteurs">Les Visiteurs</a>
            </li>
			<li class="smenu">
              <a href="index.php?uc=praticien&action=selectpraticien" title="praticien">Praticiens</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </li>
         </ul>
        
    </div>
    </div>
      </nav>