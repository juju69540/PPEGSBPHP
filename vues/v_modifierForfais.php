<div id="contenu">
      <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h2>
         
      <form method="POST"  action="index.php?uc=modifierForfais&action=validerModifFraisForfait">
      <div class="corpsForm">
          
          
            <legend>Eléments forfaitisés
            </legend>
			<?php
			foreach($selectFraisForfais as $unForfait)				
			{	
			?>
					
					<p>
						<label for="id"><?php echo $unForfait['libelle'] ?></label>
						<input type="text" id="id" name="<?php echo $unForfait['id']?>" size="10" maxlength="5" value="<?php echo $unForfait['montant']?>" >
					</p>
			<?php
				}
			?>
      </div>
      <div>
      <p>
        <input id="ok" type="submit" value="Modifier" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>