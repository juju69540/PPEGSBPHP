<div id="contenu">
      <h2>Practicien</h2>
	  <table>
	   <tr>
		  <th>Nom</th>
		  <th>Social</th>
		  <th>Adresse</th>
		  <th>Téléphone</th>
		  <th>Contact</th>
		  <th>Coefficiant notorieter</th>
		  <th>Coefficiant confiance</th>
		  <td>Choix actions</td>
	   </tr>
	   
	   <?php
		foreach ( $lesPracticiens as $unPracticien ) 
		{	
			$nom = $unPracticien['nom'];
			$social = $unPracticien['social'];
			$adresse = $unPracticien['adresse'];
			$telephone = $unPracticien['telephone'];
			$contact = $unPracticien['contact'];
			$coefnoto = $unPracticien['coefnoto'];
			$coefconfiance = $unPracticien['coefconfiance'];
	   ?>
	   
		   <tr>
			  <td><?php echo $nom?></td>
			  <td><?php echo $social?></td>
			  <td><?php echo $adresse?></td>
			  <td><?php echo $telephone?></td>
			  <td><?php echo $contact?></td>
			  <td><?php echo $coefnoto?></td>
			  <td><?php echo $coefconfiance?></td>
			  <td>
				<form action="index.php?uc=practicien&action=modifpracticien" method="post">
					<input type="submit" value="Modifier">
				</form>
				<form action="index.php?uc=practicien&action=ajout"method="post">
					<input type="submit"  value="Ajouter">
				</form>
				<form action="index.php?uc=practicien&action=supp"method="post">
					<input type="submit"  value="Supprimer">
				</form>
			  </td>
		   </tr>
		   
	    <?php
        }
		?>
	   
	</table>
	</form>
</div>