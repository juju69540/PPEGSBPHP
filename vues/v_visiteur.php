<div id="contenu">
	<h2>Les visiteurs</h2>
	<table>
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
			<tr>
				<td><input type="checkbox" name="selectionner" value="cocher"></td>
				<td><?php echo $unID ?></td>
				<td><?php echo $unNom ?></td>
				<td><?php echo $unPrenom ?></td>
				<td><?php echo $unLogin ?></td>
				<td><?php echo $unMdp ?></td>
				<td><?php echo $uneAdresse ?></td>
				<td><?php echo $unCP ?></td>
				<td><?php echo $uneVille ?></td>
				<td><?php echo $uneDateE ?> </td>
			</tr>
				<?php
					}
				?>
		</tr>
	</table>
	<form name="button" action="v_visiteur.php" method="post">
	<input type="button" name="modifier" value="Modifier">
	<input type="button" name="supprimer" value="Supprimer">
	<input type="button" name="ajouter" value="Ajouter">
	</form>
	
</div>