<?php
require_once('./modeles/Enquete.php');
require_once('./modeles/Client.php');
include('vues/vue_enquete.php');
$action=$_REQUEST['action'];
switch($action)
{  
    case'formulaireDemandeEnqueteOuControle':
    {
        //ON APPELLE LE FORMULAIRE DE SAISIE D'UNE ENQUETE
        $lesInformateurs=  Enquete::getLesInformateurs();
        $lesFaitsReproches=  Enquete::getLesFaitsReproches();
        $lesClientsEntree = Client::getClientEntree();
        include('vues/enquete/vue_formulaireDemandeEnqueteOuControle.php');
        break;
    }
  
    case'ajouterUneDemandeEnquete':
    {
        //ON RECUPERE LES DONNEES DU FORMULAIRE POUR INSERER L'ENQUETE DANS LA BDD
        $idClientEntree=$_POST['idClientEntree'];
        $DateDemande=$_POST['dateDemande'];
        $observation=$_POST['observation'];
        $inputNomDemandeur=$_POST['inputNomDemandeur'];
        if ($inputNomDemandeur=="")
        {
            $inputNomDemandeur="ANONYME";
        }
        $informateur1=$_POST['informateur1'];
        $informateur2=$_POST['informateur2'];
        $informateur3=$_POST['informateur3'];
        $informateur4=$_POST['informateur4'];
        $faitReproché1=$_POST['faitReproché1'];
        $faitReproché2=$_POST['faitReproché2'];
        $faitReproché3=$_POST['faitReproché3'];
        $faitReproché4=$_POST['faitReproché4'];
        $faitReproché5=$_POST['faitReproché5'];
        $faitReproché6=$_POST['faitReproché6'];        
        $resultat=Enquete::ajouterEnquete($idClientEntree, $DateDemande, $observation, $inputNomDemandeur, $informateur1, $informateur2, $informateur3,
                                          $informateur4, $faitReproché1, $faitReproché2, $faitReproché3, $faitReproché4, $faitReproché5, $faitReproché6);
        echo $resultat;
        break;
    }
                      
}
?>
