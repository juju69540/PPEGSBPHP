<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'lesVisiteurs':{
		$selectVisiteurs= $pdo->getLesVisiteurs();
		break;
	}
	case 'u_a_d_visiteur' : {

			  if (isset($_POST['modifier']))
			  {
				if(!empty($_POST)){
					$id = $_POST['idvisiteur'];
					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$login = $_POST['login'];
					$mdp = $_POST['mdp'];
					$adresse = $_POST['adresse'];
					$codepostal = $_POST['codepostal'];
					$ville = $_POST['ville'];
					$date = $_POST['date'];
					$pdo->visiteursModif($id,$nom,$prenom,$login,$mdp,$adresse,$codepostal,$ville,$date);
				}
			  }
			  elseif (isset($_POST['ajouter']))
			  {
				if(!empty($_POST)){
					$id = $_POST['addid'];
					$nom = $_POST['addnom'];
					$prenom = $_POST['addprenom'];
					$login = $_POST['addlogin'];
					$mdp = $_POST['addmdp'];
					$adresse = $_POST['addadresse'];
					$ville = $_POST['addville'];
					$cp = $_POST['addcp'];
					$date = $_POST['adddate'];
					$pdo->visiteursAjout($id,$nom,$prenom,$login,$mdp,$adresse,$ville,$cp,$date);
				}
			  }
			  elseif (isset($_POST['supprimer']))
			  {
				if(!empty($_POST)){
					$id = $_POST['idvisiteur'];
					$pdo->visiteurDelete($id);
				}
			  }
		break;
	}
}
$selectVisiteurs= $pdo->getLesVisiteurs();
include("vues/v_visiteur.php");
?>