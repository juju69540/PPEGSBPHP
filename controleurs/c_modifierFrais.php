<?php
include("vues/v_sommaire.php");
$selectFraisForfait= $pdo->getselectFraisForfait();

$action = $_REQUEST['action'];

switch($action){
	case 'voirForfait' : {
		include("vues/v_modifierFrais.php");
		break;
	}
	case 'modifierForfaits' :{
		foreach($selectFraisForfait as $forfait){
			$pdo->getmodifFraisForfait($forfait['id'],$_REQUEST[$forfait['id']]);
		}
		break;
	}
}


?>