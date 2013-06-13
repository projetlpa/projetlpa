<?php

class Sortie{
    
    private $idSortie;
    private $refAnimal;
    private $typeSortie;
    private $medailleImmatriculation;
    private $dateHeureSortie;
    private $responsableSortie;
    private $refFrais;
    private $autreFrais;
    private $titreCourtoisie;
    private $nom;
    private $prenom;
    private $pieceIdentite;
    private $numCarteIdentite;
    private $delivreeLe;
    private $par;
    private $adresse;
    private $codePostal;
    private $ville;
    private $tel1;
    private $tel2;
    
    function getIdSortie(){
        
        return $this->idSortie; 
    }
    
    function getRefAnimal(){
        
        return $this->refAnimal;
    }
    
    function getTypeSortie(){
        
        return $this->typeSortie;
    }
    
    function getMedailleImmatriculation(){
        
        return $this->medailleImmatriculation;
    }
    
    function getDateHeureSortie(){
        
        return $this->dateHeureSortie;
        
    }
    
    function getResponsableSortie(){
        
        return $this->responsableSortie;
        
    }
    
    function getRefFrais(){
        
        return $this->autreFrais;
        
    }
    
    function getTitreCourtoisie(){
        
        return $this->titreCourtoisie;
    }
    
    function getNom(){
        
        return $this->nom;
        
    }
    
    function getPrenom(){
        
        return $this->prenom;
        
    }
    
    function getPieceIdentite(){
        
        return $this->pieceIdentite;
    }
    
    function getNumCarteIdentite(){
        
        return $this->numCarteIdentite;
    }
    
    function getDelivreeLe(){
        
        return $this->delivreeLe;
    }
    
    function getPar(){
        
        return $this->par;
    }
    
    function getAdresse(){
        
        return $this->adresse;
    }
    
    function getCodePostal(){
        
        return $this->codePostal;
    }
    
    function getVille(){
        
        return $this->ville;
    }
    
    function getTel1(){
        
        return $this->tel1;
    }
    
    function getTel2(){
        
        return $this->tel2;
    }
    
    public static function getSortie(){
        
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT * FROM sortie";
            $
        
    }
}


?>
