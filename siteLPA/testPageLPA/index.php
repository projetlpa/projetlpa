<?php
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'pageAccueil';
}
$uc=$_REQUEST['uc'];
include("vues/vue_entete.php");
switch($uc){
    
    case'pageAccueil':{
        
        include("controleurs/c_controleurPageAccueil.php");break;
}
    case'admin':{
        
        include("controleurs/c_menuAdmin.php");break;
    }
    case'eco':{
        
        include("controleurs/c_menuEco.php");break;
    }
    
    case 'recherche':{
        include("controleurs/c_recherche.php");
        break;
    }
    case 'enquete':{
        include("controleurs/c_enquete.php");
        break;
    }
}
    
include("vues/vue_piedDePage.php");
?>
