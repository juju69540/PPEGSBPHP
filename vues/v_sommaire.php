    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
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
              <a href="index.php?uc=practicien&action=selectionnerMois" title="practicien">Practicien</a>
            </li>
			<li class="smenu">
              <a href="index.php?uc=visiteur&action=Visiteur" title="Visiteur">Visiteur</a>
            </li>
			<li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </li>
         </ul>
        
    </div>
    