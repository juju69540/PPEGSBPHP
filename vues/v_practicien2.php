<div class="container">
	<div id="contenu">
		<h2>Practicien modif</h2>
		<div id="list_de_trucs" class="table-responsive"> 
		<table class="table table-bordered">
		<tr style="width:30px;">
			<th>Nom</th>
			<th>Social</th>
			<th>Adresse</th>
			<th>Téléphone</th>
			<th>Contact</th>
			<th>Coefficiant notorieter</th>
			<th>Coefficiant confiance</th>
			<th>Spécialité</th>
			<th>Gestion</th>
			<!-- <th>Modifier</th>
			<th>Supprimer</th> -->
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
		<form action="index.php?uc=practicien&action=s_m_a_practicien" method="post">
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
						<input class="btn btn-outline-primary btn-sm" type="submit" name="modifier" value="Modifier"></br>
						<input class="btn btn-outline-danger btn-sm" type="submit" name="supprimer" value="Supprimer">
				</td>
				
			</tr>
			
			<?php
			}
			?>
			</form>
		</table>
		<table class="table table-bordered">
		<tr style="width:30px;">
			<th colspan="9">Ajouter</th>
		</tr>
		<tr style="width:30px;">
			<th>Nom</th>
			<th>Social</th>
			<th>Adresse</th>
			<th>Téléphone</th>
			<th>Contact</th>
			<th>Coefficiant notorieter</th>
			<th>Coefficiant confiance</th>
			<th>Spécialité</th>
			<th>Gestion</th>
			<!-- <th>Modifier</th>
			<th>Supprimer</th> -->
		</tr>
		<form action="index.php?uc=practicien&action=ajouterpracticien" method="post">
			<tr>
				<td>
					<input type="text" id="ajoutnom" name="ajoutnom" placeholder="Nom"/>
				</td>
				<td>
					<input type="text" id="ajoutsocial" name="ajoutsocial" placeholder="Social"/>
				</td>
				<td>
					<input type="text" id="ajoutadresse" name="ajoutadresse" placeholder="Adresse"/>
				</td>
				<td>
					<input type="text" id="ajouttelephone" name="ajouttelephone" placeholder="Téléphone"/>
				</td>
				<td>
					<input type="text" id="ajoutcontact" name="ajoutcontact" placeholder="Contact"/>
				</td>
				<td>
					<input id="ajoutcoefnoto" name="ajoutcoefnoto" placeholder="Coefficient notoriété"/>
				</td>
				<td>
					<input id="ajoutcoefconfiance" name="ajoutcoefconfiance" placeholder="Coefficient confiance"/></td>
				<td>
					<select id="ajoutspecialite">
					<?php foreach ($lesSpecialites as $uneSpecialite){ ?>    
						<option value="<?= $uneSpecialite['id']; ?>"><?= $uneSpecialite['specialite']; ?></option>
					<?php } ?>
					</select>
				</td>
				<td><input onclick="ajout()" class="btn btn-outline-success btn-sm" type="submit" name="ajouter" id="ajouter" value="Ajouter"></td>
			</tr>
			</form>
		</table>
		</div>
	</div>
</div>

<script>
function ajout() {
	var nom = document.getElementById("ajoutnom").value;
	var social = document.getElementById("ajoutsocial").value;
	var adresse = document.getElementById("ajoutadresse").value;
	var telephone = document.getElementById("ajouttelephone").value;
	var contact = document.getElementById("ajoutcontact").value;
	var noto = document.getElementById("ajoutcoefnoto").value;
	var confiance = document.getElementById("ajoutcoefconfiance").value;

	if(nom == "" && social == "" && adresse == "" && telephone == "" && contact == "" && noto == "" && confiance == ""){
		alert("Remplir tout les champs");
		return false;
	}
}
</script>