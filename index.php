<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");
		break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");
		break; 
	}
	case 'modifierFrais' :{
		include("controleurs/c_modifierFrais.php");
		break; 
	}
	case 'praticien' :{
		include("controleurs/c_praticien.php");
		break; 
	}
	case 'visiteur' :{
		include("controleurs/c_visiteur.php");
		break;
	}
} 
?>

