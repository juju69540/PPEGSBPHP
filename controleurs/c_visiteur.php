<<<<<<< HEAD
<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];

switch($action){
	case 'lesVisiteurs':{
	$selectVisiteurs= $pdo->getLesVisiteurs();
	include("vues/v_visiteur.php");
	break;
	}
	
	case 'ajouterVisiteurs':{
	include ("vues/v_ajouterVisiteur.php");
	break;
	}
}
=======
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
>>>>>>> devJulien
?>