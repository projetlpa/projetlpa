<?php

//ON RECUPERE TOUTES LES DONNEES EN FONCTION DE LA MEDAILLE INSEREE

foreach($uneMedaille as $lesMedailles){
    
     echo "Nom de l'animal : ".'  '.$lesMedailles['nom'];
    foreach($uneRace as $lesRaces)
    {
     echo "<br> Race :".'  '.$lesRaces['libelle'];
    }
    echo "<br> Sexe :".'  '.$lesMedailles['sexe'];
    echo "<br> Etat (Stérilisé / non Stérilisé):  ".'  '.$lesMedailles['etat'];
    echo "<br> Date de Stérilisation : ".' '.$lesMedailles['dateSterilisation'];
    echo "<br> Numero tatouage : ".' '.$lesMedailles['numTatouage'];
    echo "<br> Emplacement tatouage : ".' '.$lesMedailles['emplacementTatouage'];
    echo "<br> Numero Puce Electronique : ".' '.$lesMedailles['numPuceElectronique'];
    foreach ($lesVaccins1 as $unVaccin)
    {
        echo "<br> Vaccin 1 : ".' '.$unVaccin['libelle'];

    }
    
    echo "<br> Date vaccin numéro 1 : ".' '.$lesMedailles['dateVaccin1'];
    echo "<br> Rappel vaccin numéro 1 : ".' '.$lesMedailles['rappelVaccin1'];
    
    foreach($lesVaccins2 as $unVaccin2)
    {
        echo "<br> Vaccin 2 :".' '.$unVaccin2['libelle'];
    }
    echo "<br> Date vaccin numéro 2 :".' '.$lesMedailles['dateVaccin2'];
    echo "<br> Rappel vaccin numéro 2:".' '.$lesMedailles['rappelVaccin2'];
    echo "<br> Date de Naissance : ".' '.$lesMedailles['dateNaissance'];
    echo "<br> Age approximatif : ".' '.$lesMedailles['ageApproximatif'];
    echo "<br> Mois Approximatif : ".' '.$lesMedailles['moisApproximatif'];
    
    foreach ($lesTailles as $uneTaille)
    {
         echo "<br> Taille :".' '.$uneTaille['libelle'];
    }
    
    foreach($lesOreilles as $uneOreille)
    {
        echo "<br> Oreille :".' '.$uneOreille['libelle'];
    }
    
    foreach($lesQueues as $uneQueue)
    {
        echo "<br> Taille Queue ".' '.$uneQueue['libelle'];
    }
    
    

    
    
   
    
    
    
    
    
    
    
}




?>
