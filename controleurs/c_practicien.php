<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectpracticien' : {
		$lesPracticiens=$pdo->getLesPracticiens();
		// include("vues/v_practicien.php");
		break;
	}
	case 'supprimer_modifierpracticien' : {

			  if (isset($_POST['modifier']))
			  {
				if(!empty($_POST)){
					$id = $_POST['id'];
					$nom = $_POST['nom'];
					$social = $_POST['social'];
					$adresse = $_POST['adresse'];
					$telephone = $_POST['telephone'];
					$contact = $_POST['contact'];
					$coefnoto = $_POST['coefficiant_notorieter'];
					$coefconfiance = $_POST['coefficiant_confiance'];
					$specialite = $_POST['specialite'];
					$pdo->setLesPracticiensModif($id,$nom,$social,$adresse,$telephone,$contact,$coefnoto,$coefconfiance,$specialite);
				}
			  }
			  elseif (isset($_POST['supprimer']))
			  {
				if(!empty($_POST)){
					$id = $_POST['id'];
					$pdo->setLesPracticiensSupp($id);
				}
			  } 
		// include("vues/v_practicien.php");
		break;
	}
	case 'ajouterpracticien': {
		if(!empty($_POST)){
			$nom = $_POST['nom'];
			$social = $_POST['social'];
			$adresse = $_POST['adresse'];
			$telephone = $_POST['telephone'];
			$contact = $_POST['contact'];
			$coefficiant_notorieter = $_POST['coefnoto'];
			$coefficiant_confiance = $_POST['coefconfiance'];
			$specialite = $_POST['specialite'];
			$pdo->setLesPracticiensAjout($nom,$social,$adresse,$telephone,$contact,$coefficiant_notorieter,$coefficiant_confiance,$specialite);
		}
		break;
	}
}
$lesPracticiens=$pdo->getLesPracticiens();
$lesSpecialites = $pdo->getLesSpecialitePracticiens();
include("vues/v_practicien.php");
?>