<?php
require_once('./modeles/Client.php');
require_once('./modeles/Animal.php');
include('vues/vue_menuAdmin.php');
$action=$_REQUEST['action'];
switch($action){  
    case 'nouveauClient':{
        //ON SE REDIRIGE VERS LA PAGE DU FORMULAIRE
        $lesEtats=Client::getEtatClient();
        include('vues/administration/vue_formulaireNouveauClient.php');
        break;
    }
    case 'ajouterUnClient':{
        //ON RECUPERE TOUTES LES DONNES ENTREES DEPUIS LE FORMULARIE DE L'AJOUT CLIENT POUR L'INSERER DANS LA BDD
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $CP=$_POST['codePostal'];
        $ville=$_POST['ville'];
        $telephone1=$_POST['telephone1'];
        $telephone2=$_POST['telephone2'];
        $idEtatClient=$_POST['etatClient'];
        $delinquant=$_POST['delinquant'];
        $resultat=Client::ajoutClient($nom, $prenom, $adresse, $CP, $ville, $telephone1, $telephone2,$idEtatClient,$delinquant);
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
        //ON RECUPERE TOUTES LES VALEURS ASSOCIES A L'ANIMAL DEPUIS LA BDD AFIN DE LES FAIRE APPARAITRE SUR LE FORMULAIRE DANS DES LISTES DEROULANTES
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
        $lesClients=  Client::getClientEntree();
        include ('vues/administration/vue_formulaireNouvelAnimal.php');
        break;
    }
    
    case 'ajouterAnimal':{
        // ON RECUPERE TOUTES LES DONNEES ENTREES DEPUIS LE FORMULAIRE POUR AJOUTER L'ANIMAL AFIN DE LES INSERER DANS LA BDD
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
    case 'vueModifierNumeroMedailleAnimal':
    {
      $lesAnimaux=  Animal::getLesAnimaux();
      
      include('vues/administration/vue_modifierMedailleAnimal.php');
      break;
        
    }
    
    case 'nouvelleSortie':{
        $selectMedaille=Animal::getLesMedailles();
        include('vues/administration/vue_formulaireSortieAnimal.php');
        break;
        
    }
    case 'enregistrerSortie':
    {
        $numMedaille=$_POST['numMedaille'];
        $uneRace=Animal::raceParMedaille($numMedaille);
        $lesVaccins1=  Animal::vaccin1ParMedaille($numMedaille);
        $lesVaccins2= Animal::vaccin2ParMedaille($numMedaille);
        $lesTailles=  Animal::tailleParMedaille($numMedaille);
        $lesOreilles=  Animal::oreilleParMedaille($numMedaille);
        $lesQueues= Animal::tailleQueueParMedaille($numMedaille);
        $animalMedaille=Animal::animalParMedaille($numMedaille);
        $selectMedaille=Animal::getLesMedailles();
        include('vues/administration/vue_formulaireSortieAnimal.php');
        $uneMedaille=Animal::animalParMedaille($numMedaille);
        $lesAnimaux=Animal::getLesAnimaux();
        include('vues/administration/vue_resultatEtFormulaireClient.php');
        break;
        
    }
    
    
    case 'modifierLaMedaille':
    {
      $id=$_POST['unAnimal'];
      $numMedaille=$_POST['modifierMedaille'];
      $laMedaille=Animal::getMedailles($id);
      $unResultat=Animal::modifierMedailleAnimal($id,$numMedaille);
      if($unResultat==TRUE){
          
          echo("Resultat obtenu :");
          
      }
      else{
          echo ("Erreur lors de l'insertion");
      }
      break;
        
    }
    case 'vueEspece':{
    
        
        include('vues/vue_ajoutEspece.php');
        break;
    }
    
    
    case'ajouterEspece':
    {
        
        $libelle=$_POST['ajoutEspece'];
        $leResultat=Animal::insererEspece($libelle);
        include('vues/vue_ajoutEspece.php');
        break;
    }
    
        
        
        
      
}
?>