<?php
include("vues/v_sommaire.php");
$selectFraisForfait= $pdo->getselectFraisForfait();

$action = $_REQUEST['action'];

switch($action){
	case 'voirpraticien' : {
		include("vues/v_modifierFrais.php");
		break;
	}
	case 'modifpracticien' :{
		foreach($selectFraisForfait as $forfait){
			$pdo->getmodifFraisForfait($forfait['id'],$_REQUEST[$forfait['id']]);
		}
		break;
	}
	case 'supppraticien' : {
		include("vues/v_modifierFrais.php");
		break;
	}
}


?>