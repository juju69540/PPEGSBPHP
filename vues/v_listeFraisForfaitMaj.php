<div id="contenu">
      <h2>Modification des forfaits <?php /*echo $numMois."-".$numAnnee */?></h2>
         
      <form method="POST"  action="#>
      <div class="corpsForm">
          
          <fieldset>
            <legend>Modification
            </legend>
			<?php
				foreach ($selectFraisForfait as $unForfait)
				{
			?>
					<p>
						<label><?php echo $unForfait['libelle'] ?></label>
						<input type="text" id="id" name="lesForfaits" size="10" maxlength="5" value="<?php echo $unForfait['montant']?>" >
					</p>
			<?php
				}
			?>
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Modifier" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>