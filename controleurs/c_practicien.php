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
}
?>