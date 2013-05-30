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
        if ($resultat==TRUE)
        {
            echo ("Tout est inséré");            
        }
        else
        {
            echo ("erreur insertion ");
        }
        echo $resultat;
        break;
    }
    case 'nouvelAnimal':{
        
        $lesTypesEspeces=  Animal::getLesEspeces();
        $lesRaces= Animal::getLesRaces();
        $lesTailles=  Animal::getLesTailles();
        $lesOreilles = Animal::getLesOreilles();
        $lesPoils=  Animal::getLesPoils();
        $lesQueues=  Animal::getLesQueues();
        $lesEtats=  Animal::getLesEtats();
        $lesColliers=  Animal::getLesColliers();
        $lesVaccins= Animal::getLesVaccins();
        $lesEntrees=  Animal::getLesEntrees();
        $lesClients=  Client::getClient();
        include ('vues/vue_formulaireNouvelAnimal.php');
        break;
    }
    
    case 'ajouterAnimal':{
        
        $nom=$_POST['nom'];
        $idEspece=$_POST['espece'];
        $idRace=$_POST['race'];
        $numMedaille=$_POST['medaille'];
        $sexe=$_POST['sexe'];
        $etat=$_POST['etat'];
        $dateSterilisation=$_POST['dateSterilisation'];
        $idCollier=$_POST['collier'];
        $numTatouage=$_POST['numTatouage'];
        $emplacementTatouage=$_POST['emplacementTatouage'];
        $numPuceElectronique=$_POST['numPuceElectronique'];
        $refVaccin1=$_POST['refVaccin1'];
        $dateVaccin1=$_POST['dateVaccin1'];
        $rappelVaccin1=$_POST['refVaccin1'];
        $refVaccin2=$_POST['refVaccin1'];
        $dateVaccin2=$_POST['dateVaccin2'];
        $rappelVaccin2=$_POST['rappelVaccin2'];
        $dateNaissance=$_POST['dateNaissance'];
        $ageApproximatif=$_POST['ageApproximatif'];
        $moisApproximatif=$_POST['moisApproximatif'];
        $idTaille=$_POST['taille'];
        $idOreille=$_POST['oreille'];
        $idPoil=$_POST['poil'];
        $idTailleQueue=$_POST['queue'];
        $etatAnimal=$_POST['etatAnimal'];
        $couleurPrincipal=$_POST['couleurPrincipal'];
        $couleurSecondaire=$_POST['couleurSecondaire'];
        $signeParticulier=$_POST['signeParticulier'];
        $motif=$_POST['motif'];
        $observation=$_POST['observation'];
        $mordeur=$_POST['mordeur'];
        $controleSanitaireLpa=$_POST['controleSanitaireLpa'];
        $typeEntree=$_POST['typeEntree'];
        $refClient=$_POST['refClient'];
        $resultat=  Animal::ajouterAnimal($idEspece, $idRace, $numMedaille, $sexe, $etat, $dateSterilisation, $idCollier, $numTatouage, $emplacementTatouage, $numPuceElectronique,
                                          $refVaccin1, $dateVaccin1, $rappelVaccin1, $refVaccin2, $dateVaccin2 , $rappelVaccin2 , $dateNaissance ,
                                          $ageApproximatif, $moisApproximatif, $nom,$idTaille, $idOreille, $idPoil, $idTailleQueue, $etatAnimal, $couleurPrincipal,
                                          $couleurSecondaire, $signeParticulier, $motif, $observation, $mordeur, $controleSanitaireLpa,$typeEntree,$refClient);
        echo $resultat;
        break;
        
        
    }
    
    case 'ajouterUneEntree':{
        break;
    }
    
    
    case 'nouvelleEntree':{
          break;
    }
               
      
    case 'rechercheClient':{
        
        include('vues/vue_recherche.php');
        break;
        
     }   
        
        
        
    
}
?>