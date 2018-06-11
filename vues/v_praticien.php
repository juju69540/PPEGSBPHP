<div class="container">
	<div id="contenu">
		<h2>Modification des Praticiens</h2>
		<div id="list_de_trucs"> 
		<table class="table table-borderless">
			<thead class="thead-light">
				<tr>
					<th>Nom</th>
					<th>Social</th>
					<th>Adresse</th>
					<th>Téléphone</th>
					<th>Contact</th>
					<th>Coefficiant notorieter</th>
					<th>Coefficiant confiance</th>
					<th>Spécialité</th>
					<th>Gestion</th>
				</tr>
			</thead>
		
		<?php
			foreach ( $lesPraticiens as $unPraticien )
			{
				// var_dump($unPraticien);
				$idPraticien = $unPraticien[0];
				$nom = $unPraticien['nom'];
				$social = $unPraticien['social'];
				$adresse = $unPraticien['adresse'];
				$telephone = $unPraticien['telephone'];
				$contact = $unPraticien['contact'];
				$coefnoto = $unPraticien['coefficiant_notorieter'];
				$coefconfiance = $unPraticien['coefficiant_confiance'];
				$specialite_praticien = $unPraticien['specialite'];
		?>
		<form action="index.php?uc=praticien&action=s_m_a_praticien" method="post" id="form" onsubmit="return confirm('Souhaitez-vous faire la modification ?');">
		
			<tr>
				<?php echo '<input type="hidden" name="idpraticien" value="'.$idPraticien.'"/>'?>
				<?php echo '<td><input type="text" name="nom" id="nom" value="'.$nom.'"></td>'?>
				<?php echo '<td><input type="text" name="social" id="social" value="'.$social.'"></td>'?>
				<?php echo '<td><input type="text" name="adresse" id="adresse" value="'.$adresse.'"></td>'?>
				<?php echo '<td><input type="text" name="telephone" id="telephone" value="'.$telephone.'"></td>'?>
				<?php echo '<td><input type="text" name="contact" id="contact" value="'.$contact.'"></td>'?>
				<?php echo '<td><input type="text" name="coefficiant_notorieter" id="coefnoto" value="'.$coefnoto.'"></td>'?>
				<?php echo '<td><input type="text" name="coefficiant_confiance" id="coefconfiance" value="'.$coefconfiance.'"></td>'?>
				<td><select id="praticien" name="specialite">
				<?php
					foreach ($lesSpecialites as $uneSpecialite){
						$id_specialite = $uneSpecialite['id'];
						$specialites = $uneSpecialite['specialite'];
						?>		
							<?php
								if($specialite_praticien == $specialites){
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

				<td>
						<input class="btn btn-outline-primary" type="submit" name="modifier" value="Modifier"></br>
						<input class="btn btn-outline-danger" type="submit" name="supprimer" value="Supprimer">
				</td>
				
			</tr>
			</form>
			<?php
			}
			?>
			<form action="index.php?uc=praticien&action=s_m_a_praticien" method="post">
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
					<select id="specialite" name="namespecialite">
					<?php foreach ($lesSpecialites as $uneSpecialite){ ?>
						<option value="<?= $uneSpecialite['id']; ?>"><?= $uneSpecialite['specialite']; ?></option>
					<?php } ?>
					</select>
				</td>
				
				<td><input class="btn btn-outline-success" type="submit" name="ajouter" id="ajouter" value="Ajouter"></td>
			
			</tr>
			</form>
			<?php
				if(count($_POST) != 0 && isset($_POST['ajouter'])){
					if(empty($_POST['ajoutnom'])){
						echo "<script>alert('Veuillez remplir tout les champs pour l'ajout d'un Praticien);</script>";
					}
					else{
						echo "<script>onClick='return confirm(\'Voulez-vous vraiment l\'ajouter ?\')'</script>";
					}
				}	
			?>
		</table>
		</div>
	</div>
</div>

<!-- <script>
function ajout() {
	var nom = document.getElementById("ajoutnom").value;
	var social = document.getElementById("ajoutsocial").value;
	var adresse = document.getElementById("ajoutadresse").value;
	var telephone = document.getElementById("ajouttelephone").value;
	var contact = document.getElementById("ajoutcontact").value;
	var noto = document.getElementById("ajoutcoefnoto").value;
	var confiance = document.getElementById("ajoutcoefconfiance").value;

	if(nom == "" || social == "" || adresse == "" || telephone == "" || contact == "" || noto == "" || confiance == ""){
		// alert("Remplir tout les champs");
		onClick="confirm('Are you sure your want to delete?')";
	}
}
</script> -->