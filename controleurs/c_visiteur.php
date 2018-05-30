<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];

switch($action){
	case 'lesVisiteurs':{
	$selectVisiteurs= $pdo->getLesVisiteurs();
	include("vues/v_visiteur.php");
	break;
	}
}
?>