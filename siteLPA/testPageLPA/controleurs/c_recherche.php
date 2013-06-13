<?php
require_once('./modeles/Client.php');
require_once('./modeles/Animal.php');
include('vues/vue_recherche.php');
$action=$_REQUEST['action'];

switch($action){
    
    case'rechercheClient':{
        
        //ON RECUPERE TOUS LES CLIENTS PRESENTS ET DEJA ENREGISTRES DANS LA BDD, ILS SERONT ALORS PRESENTS SUR UNE LISTE DEROULANTES.
        
        $lesClients=Client::getClient();
        include('vues/recherche/vue_rechercheClient.php');break;
        }
        
    case'animalParMedaille':{
        
        //ON RECUPERE TOUS LES NUMEROS DE MEDAILLES ET ON AFFICHERA LA PAGE DE RECHERCHE ANIMAL PAR MEDAILLE
        $selectMedaille=Animal::getLesMedailles();
        include('vues/recherche/vue_rechercheAnimalParMedaille.php');break;
        
        }
        
    case'rechercheParMedaille':{
        
        //ON RECUPERE LE NUMERO DE MEDAILLE INSERE PUIS ON AFFICHE TOUTES LES INFORMATIONS DE L'ANIMAL SELON LE NUMERO INSERE
        
        $numMedaille=$_POST['rechercheParMedaille'];
        $uneMedaille=Animal::animalParMedaille($numMedaille);
        $uneRace=Animal::raceParMedaille($numMedaille);
        $lesVaccins1=  Animal::vaccin1ParMedaille($numMedaille);
        $lesVaccins2= Animal::vaccin2ParMedaille($numMedaille);
        $lesTailles=  Animal::tailleParMedaille($numMedaille);
        $lesOreilles=  Animal::oreilleParMedaille($numMedaille);
        $lesQueues= Animal::tailleQueueParMedaille($numMedaille);
        $selectMedaille=Animal::getLesMedailles();
        include('vues/recherche/vue_rechercheAnimalParMedaille.php');
        include('vues/recherche/vue_resultatRechercheAnimal.php');
        
        break;
        
    }    
        
    
    
    



}
?>
