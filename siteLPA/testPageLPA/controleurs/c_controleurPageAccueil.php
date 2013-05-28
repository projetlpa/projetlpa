<?php
// PAR DEFAUT : VUE PAGE D'ACCUEUIL
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'vuePageAccueil';
}
$action=$_REQUEST['action'];

switch($action){    
    case 'vuePageAccueil':{
        include("vues/vue_accueil.php");
        break;
    }
}
?>