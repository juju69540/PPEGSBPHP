<div class="container" style="margin-bottom: 780px;">
	<div id="contenu">
		<h2>Les visiteurs</h2>
		<table class="table table-borderless" style="position: absolute; left: 240px;">
			<thead class="thead-light">
				<tr>
					<th></th>
					<th>ID</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Login</th>
					<th>Mdp</th>
					<th>Adresse</th>
					<th>Code Postal</th>
					<th>Ville</th>
					<th>Date d'embauche</th>
				</tr>
			</thead>
			<form action="index.php?uc=visiteur&action=u_a_d_visiteur" method="post">
			<tr>
				<td>
					<input onClick="return confirm('Voulez-vous vraiment l\'ajouter ?')" class="btn btn-outline-success" type="submit" name="ajouter"  value="Ajouter">
				</td>
				<td>
					<input type="text" id="addid" name="addid" placeholder="ID (ex: a650)" required/>
				</td>
				<td>
					<input type="text" id="addnom" name="addnom" placeholder="Nom"/>
				</td>
				<td>
					<input type="text" id="addprenom" name="addprenom" placeholder="Prenom"/>
				</td>
				<td>
					<input type="text" id="addlogin" name="addlogin" placeholder="Login"/>
				</td>
				<td>
					<input type="text" id="addmdp" name="addmdp" placeholder="Mot de passe"/>
				</td>
				<td>
					<input type="text" id="addadresse" name="addadresse" placeholder="Adresse"/>
				</td>
				<td>
					<input type="text" id="addcp" name="addcp" placeholder="Code Postal"/>
				</td>
				<td>
					<input type="text" id="addville" name="addville" placeholder="Ville"/></td>
				</td>
				<td>
					<input type="date" id="adddate" name="adddate" required/></td>
				</td>
			</tr>
			</form>
				<tr>
					<?php
						foreach ($selectVisiteurs as $unVisiteur)
							{
							$unID = $unVisiteur['id'];
							$unNom = $unVisiteur['nom'];
							$unPrenom = $unVisiteur['prenom'];
							$unLogin = $unVisiteur['login'];
							$unMdp = $unVisiteur['mdp'];
							$uneAdresse = $unVisiteur['adresse'];
							$unCP = $unVisiteur['cp'];
							$uneVille = $unVisiteur['ville'];
							$uneDateE = $unVisiteur['dateEmbauche'];
					?>
					<form action="index.php?uc=visiteur&action=u_a_d_visiteur" method="post" id="formV" onsubmit="return confirm('Souhaitez-vous faire la modification ?');">
					
					<tr>
						<td><input class="btn btn-outline-primary" type="submit" name="modifier" value="Modifier"><input class="btn btn-outline-danger" type="submit" name="supprimer" value="Supprimer"></td>
						<?php echo '<td style="background-color: grey"><input type="hidden" name="idvisiteur" value="'.$unID.'"/></td>'?>
						<?php echo '<td><input type="text" name="nom" id="nom" value="'.$unNom.'"></td>'?>
						<?php echo '<td><input type="text" name="prenom" id="prenom" value="'.$unPrenom.'"></td>'?>
						<?php echo '<td><input type="text" name="login" id="ogin" value="'.$unLogin.'"></td>'?>
						<?php echo '<td><input type="text" name="mdp" id="mdp" value="'.$unMdp.'"></td>'?>
						<?php echo '<td><input type="text" name="adresse" id="adresse" value="'.$uneAdresse.'"></td>'?>
						<?php echo '<td><input type="text" name="codepostal" id="codepostal" value="'.$unCP.'"></td>'?>
						<?php echo '<td><input type="text" name="ville" id="ville" value="'.$uneVille.'"></td>'?>
						<?php echo '<td><input type="text" name="date" id="date" value="'.$uneDateE.'"></td>'?>
					</tr>
					</form>
					<?php
						}
					?>
				</tr>	
		</table>
	</div>
</div>