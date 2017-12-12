<?php
echo"
	<div id='contenu'>
	<h2>Ajouter un visiteur</h2>
	<form name='button' method='post'>
	<table>
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
		</tr>
		<tr>
			<td><input id='nom'></input></td>
			<td><input id='prenom'></input></td>
		</tr>
		<tr>
			<th>Login</th>
			<th>Mdp</th>
		</tr>
		<tr>
			<td><input id='login'></input></td>
			<td><input id='mdp'></input></td>
		</tr>
		<tr>
			<th>Adresse</th>
			<th>Code Postal</th>
			
		</tr>
		<tr>	
			<td><input id='adresse'></input></td>
			<td><input id='codepostal'></input></td>
		</tr>
		<tr>
			<th>Ville</th>
			<th>Date d'embauche</th>
		</tr>
			<td><input id='ville'></input></td>
			<td><input id='dateembauche'></input></td>
		</tr>
	</table>
	<input href='index.php?uc=visiteur&action=ajouterVisiteurs' title='ajouterVisiteurs' type='submit' name='valider' value='Valider'>
	<input type='submit' name='retour' value='Retour'>
	</form>
	
</div>
";
if(isset($_POST['valider']))
echo "vous avez valider le message";
else if(isset($_POST['retour']))
echo "Vous avez refuser le message.";
?>