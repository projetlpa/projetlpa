<?php
require_once('./modeles/Client.php');
require_once('./modeles/Animal.php');
include('vues/vue_recherche.php');
$action=$_REQUEST['action'];

switch($action){
    
    case'rechercheClient':{
        
        
        $lesClients=Client::getClient();
        include('vues/vue_rechercheClient.php');break;
        }
        
    case'animalParMedaille':{
        $selectMedaille=Animal::getLesMedailles();
        include('vues/vue_rechercheAnimalParMedaille.php');break;
        
        }
        
    case'rechercheParMedaille':{
        $numMedaille=$_POST['rechercheParMedaille'];
        $uneMedaille=Animal::animalParMedaille($numMedaille);
        $uneRace=Animal::raceParMedaille($numMedaille);
        $lesVaccins1=  Animal::vaccin1ParMedaille($numMedaille);
        $lesVaccins2= Animal::vaccin2ParMedaille($numMedaille);
        $lesTailles=  Animal::tailleParMedaille($numMedaille);
        $lesOreilles=  Animal::oreilleParMedaille($numMedaille);
        $lesQueues= Animal::tailleQueueParMedaille($numMedaille);
        include('vues/vue_rechercheAnimalParMedaille.php');
        include('vues/vue_resultatRechercheAnimal.php');
        
        break;
        
    }    
        
    
    
    



}
?>
