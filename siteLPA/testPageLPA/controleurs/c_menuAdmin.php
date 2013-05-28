<?php
require_once('./modeles/Client.php');
require_once('./modeles/Animal.php');
include('vues/vue_menuAdmin.php');
$action=$_REQUEST['action'];
switch($action){  
    case 'nouveauClient':{
        $lesEtats=Client::getEtatClient();
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
        $idEtatClient=$_POST['etatClient'];
        $resultat=Client::ajoutClient($nom, $prenom, $adresse, $CP, $ville, $telephone1, $telephone2,$idEtatClient);
        /*if ($resultat==TRUE)
        {
            echo ("Tout est inséré");            
        }
        else
        {
            echo ("erreur insertion ");
        }*/
        echo $resultat;
        break;
    }
    case 'nouvelAnimal':{
        
        $lesTypesEspeces=  Animal::getLesEspeces();
        include ('vues/vue_formulaireNouvelAnimal.php');
        break;
    }
    case 'ajouterAnimal':{
        
        break;
    }    
    case 'ajouterUneEntree':{
        break;
    }
    case 'nouvelleEntree':{
        
               
        break;
    }
}
?>