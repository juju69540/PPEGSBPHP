<div class="container">
	<div id="contenu">
      <h2>Practicien</h2>
		  <form action="index.php?uc=practicien&action=ajouterpracticien" method="post" style="text-align:center;">
		    <div style="padding-top:20px;" class="form-group col-sm-3">
				<label class="sr-only" for="nomlbl">Nom :</label>
				<input style="text-align:center;" class="form-control" type="text" id="nom" name="nom" placeholder="Nom"/>
			</div>
			<div class="form-group col-sm-3">
				<label class="sr-only" for="social">Social :</label>
				<input style="text-align:center;" class="form-control" type="text" id="social" name="social" placeholder="Social"/>
			</div>
			<div class="form-group col-sm-3">
				<label class="sr-only" for="adresse">Adresse :</label>
				<input style="text-align:center;" class="form-control" id="adresse" name="adresse" placeholder="Adresse"/>
			</div>  
			<div class="form-group col-sm-3">
				<label class="sr-only" for="telephone">Téléphone :</label>
				<input style="text-align:center;" class="form-control" id="telephone" name="telephone" placeholder="Téléphone"/>
			</div>
			<div class="form-group col-sm-3">
				<label class="sr-only" for="contact">Contact :</label>
				<input style="text-align:center;" class="form-control" id="contact" name="contact" placeholder="Contact"/>
			</div>
			<div class="form-group col-sm-3">
				<label class="sr-only" for="coefnoto">Coefficiant notorieter :</label>
				<input style="text-align:center;" class="form-control" id="coefnoto" name="coefnoto" placeholder="Coefficient notoriété"/>
			</div>
			<div class="form-group col-sm-3">
				<label class="sr-only" for="coefconfiance">Coefficiant confiance :</label>
				<input style="text-align:center;" class="form-control" id="coefconfiance" name="coefconfiance" placeholder="Coefficient confiance"/>
			</div>
			<div class="form-group col-sm-3">
			<select class=form-control id="practicien" name="specialite">
			<?php
				foreach ($lesSpecialites as $uneSpecialite){
					$id_specialite = $uneSpecialite['id'];
					$specialite = $uneSpecialite['specialite'];
					?>
						<option value="<?php echo $id_specialite ?>"><?php echo $specialite ?></option>
					<?php
				}
			?>
			</select>
			</div>
			<input class=".btn" type="submit" value="Ajouter">
		</form>
	</div>

<div id="contenu">
      <h2>Practicien modif</h2>
	  <div id="list_de_trucs" class="table-responsive"> 
  	  <table class="table table-bordered">
	   <tr  style="width:30px;">
		  <th>Nom</th>
		  <th>Social</th>
		  <th>Adresse</th>
		  <th>Téléphone</th>
		  <th>Contact</th>
		  <th>Coefficiant notorieter</th>
		  <th>Coefficiant confiance</th>
		  <th>Spécialité</th>
		  <th>Modifier</th>
		  <th>Supprimer</th>
	   </tr>
	   
	   <?php
		foreach ( $lesPracticiens as $unPracticien )
		{
			// var_dump($unPracticien);
			$id = $unPracticien[0];
			$nom = $unPracticien['nom'];
			$social = $unPracticien['social'];
			$adresse = $unPracticien['adresse'];
			$telephone = $unPracticien['telephone'];
			$contact = $unPracticien['contact'];
			$coefnoto = $unPracticien['coefficiant_notorieter'];
			$coefconfiance = $unPracticien['coefficiant_confiance'];
			$specialite_practicien = $unPracticien['specialite'];
	   ?>
	   <form action="index.php?uc=practicien&action=supprimer_modifierpracticien" method="post">
	   <?php echo '<input type="hidden" name="id" value="'.$id.'"/>'?>
		   <tr>
			  <?php echo '<td><input type="text" name="nom" id="nom" value="'.$nom.'"></td>'?>
			  <?php echo '<td><input type="text" name="social" id="social" value="'.$social.'"></td>'?>
			  <?php echo '<td><input type="text" name="adresse" id="adresse" value="'.$adresse.'"></td>'?>
			  <?php echo '<td><input type="text" name="telephone" id="telephone" value="'.$telephone.'"></td>'?>
			  <?php echo '<td><input type="text" name="contact" id="contact" value="'.$contact.'"></td>'?>
			  <?php echo '<td><input type="text" name="coefficiant_notorieter" id="coefnoto" value="'.$coefnoto.'"></td>'?>
			  <?php echo '<td><input type="text" name="coefficiant_confiance" id="coefconfiance" value="'.$coefconfiance.'"></td>'?>
			  <td><select id="practicien" name="specialite">
			<?php
				foreach ($lesSpecialites as $uneSpecialite){
					$id_specialite = $uneSpecialite['id'];
					$specialites = $uneSpecialite['specialite'];
					?>		
						<?php
							if($specialite_practicien == $specialites){
								echo '<option value="'.$id_specialite.'" selected>'.$specialites.'</option>';
							}
							else{
								echo '<option value="'.$id_specialite.'">'.$specialites.'</option>';
							}
						?>
					<?php
				}
			?>
			</select></td>
			  
			  	
			  <!-- <td><a href="#" name="modifier"><img src="images/modifier.png" alt="modifier" name="modifier"/></a></td>
			  <td><a href="#" name="supprimer"><img src="images/supprimer.png" alt="supprimer" name="supprimer"/></a></td> -->

			  <td>
					<input type="submit" name="modifier" value="Modifier">
			  </td>
			  <td>
					<input type="submit" name="supprimer" value="Supprimer">
			  </td>
			</form>
		   </tr>
		   
	    <?php
		}
		?>
	   
	</table>
	</div>
	</div>
</div>