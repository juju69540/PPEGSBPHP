<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectpraticien' : {
		$lesPraticiens=$pdo->getLesPraticiens();
		// include("vues/v_praticien.php");
		break;
	}
	case 's_m_a_praticien' : {

			  if (isset($_POST['modifier']))
			  {
				if(!empty($_POST)){
					$id = $_POST['idpraticien'];
					$nom = $_POST['nom'];
					$social = $_POST['social'];
					$adresse = $_POST['adresse'];
					$telephone = $_POST['telephone'];
					$contact = $_POST['contact'];
					$coefnoto = $_POST['coefficiant_notorieter'];
					$coefconfiance = $_POST['coefficiant_confiance'];
					$specialite = $_POST['specialite'];
					$pdo->setLesPraticiensModif($id,$nom,$social,$adresse,$telephone,$contact,$coefnoto,$coefconfiance,$specialite);
				}
			  }
			  elseif (isset($_POST['ajouter']))
			  {
				if(!empty($_POST)){
					$nom = $_POST['ajoutnom'];
					$social = $_POST['ajoutsocial'];
					$adresse = $_POST['ajoutadresse'];
					$telephone = $_POST['ajouttelephone'];
					$contact = $_POST['ajoutcontact'];
					$coefnoto = $_POST['ajoutcoefnoto'];
					$coefconfiance = $_POST['ajoutcoefconfiance'];
					$specialite = $_POST['namespecialite'];
					$pdo->setLesPraticiensAjout($nom,$social,$adresse,$telephone,$contact,$coefnoto,$coefconfiance,$specialite);
				}
			  }
			  elseif (isset($_POST['supprimer']))
			  {
				if(!empty($_POST)){
					$id = $_POST['idpraticien'];
					$pdo->setLesPraticiensSupp($id);
				}
			  }
		break;
	}
	// case 'ajouterprasticien': {
	// 	if(!empty($_POST)){
	// 		$nom = $_POST['ajoutnom'];
	// 		$social = $_POST['ajoutsocial'];
	// 		$adresse = $_POST['ajoutadresse'];
	// 		$telephone = $_POST['ajouttelephone'];
	// 		$contact = $_POST['ajoutcontact'];
	// 		$coefficiant_notorieter = $_POST['ajoutcoefnoto'];
	// 		$coefficiant_confiance = $_POST['ajoutcoefconfiance'];
	// 		$specialite = $_POST['specialite'];
	// 		$pdo->setLesPraticiensAjout($nom,$social,$adresse,$telephone,$contact,$coefficiant_notorieter,$coefficiant_confiance,$specialite);
	// 	}
	// 	break;
	// }
}
$lesPraticiens=$pdo->getLesPraticiens();
$lesSpecialites = $pdo->getLesSpecialitePraticiens();
include("vues/v_praticien.php");
?>