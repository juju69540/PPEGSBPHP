<?php
include("vues/v_sommaire.php");
$selectFraisForfais= $pdo->getLesFraisForfais();
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
switch($action){
	case 'voirFraisForfait':{ 
		include("vues/v_modifierForfais.php");
		break;
	}
	
	case 'validerModifFraisForfait':{
		foreach($selectFraisForfais as $forfais) {
		$pdo->setFraisForfais($forfais['id'],$_REQUEST[$forfais['id']]);
	  
	}break;
}
}