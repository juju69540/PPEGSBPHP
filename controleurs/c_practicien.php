<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectpracticien' : {
		$lesPracticiens=$pdo->getLesPracticiens();
		include("vues/v_practicien.php");
		break;
	}
	case 'modifpracticien' : {
		$lesPracticiens=$pdo->getLesPracticiens();
		include("vues/v_modifier.php");
		break;
	}
	case 'supp' : {
		$lesPracticiens=$pdo->getLesPracticiensModif();
		include("vues/v_modifier.php");
		break;
	}
	case 'ajout' : {
		include("vues/v_ajouter.php");
		break;
	}
	case 'ajoutPraticien': {
		$nom = $_REQUEST['nom'];
		$social = $_REQUEST['social'];
		$adresse = $_REQUEST['adresse'];
		$telephone = $_REQUEST['telephone'];
		$contact = $_REQUEST['contact'];
		$coefnoto = $_REQUEST['coefnoto'];
		$coefconfiance = $_REQUEST['coefconfiance'];
		$lesPracticiens=$pdo->getLesPracticiensAjout();
		$lesPracticiens=$pdo->getLesPracticiens();
		include("vues/v_practicien.php");
		break;
	}
}
?>