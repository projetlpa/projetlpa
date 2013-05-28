<?php
require_once('./modeles/Client.php');
require_once('./modeles/Animal.php');
include('vues/vue_menuAdmin.php');
$action=$_REQUEST['action'];
switch($action){  
    case 'nouveauClient':{
        include('vues/vue_formulaireNouveauClient.php');
        break;
    }
    case 'ajouterUnClient':{
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $CP=$_POST['codePostal'];
        $ville=$_POST['ville'];
        $telephone1=$_POST['telephone1'];
        $telephone2=$_POST['telephone2'];
        $resultat=client::ajoutClient($nom, $prenom, $adresse, $CP, $ville, $telephone1, $telephone2);
        break;
    }
    case 'nouvelAnimal':{
        $lesTypesEspeces=  animal::getLesEspeces();
        include ('vues/vue_formulaireNouvelAnimal.php');
        break;
    }
    case 'ajouterAnimal':{
        
        break;
    }    
    case 'ajouterUneEntree':{
        break;
    }
}
?>