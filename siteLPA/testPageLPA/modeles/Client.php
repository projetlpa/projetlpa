<?php


class client{
    
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $CP;
    private $ville;
    private $telephone1;
    private $telephone2;
    
    function getId(){
        
        return $this->id;
        
    }
    function getNom()
    {
        return $this->nom;
    }
    function getPrenom(){
        
        return $this->prenom;
    }
    function getAdresse(){
        return $this->adresse;
    }
    function getCP(){
        return $this->CP;
    }
    function getVille(){
        return $this->ville;
    }
       
    function getTelephone1(){
        return $this->telephone1;
    }
    function getTelephone2(){
        return $this->telephone2;
    }
    
    // FONCTION AJOUTER CLIENT
    
    public static function ajoutClient($nom,$prenom,$adresse,$CP,$ville,$telephone1,$telephone2)
    {      
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="INSERT INTO client VALUES('','$nom','$prenom','$adresse','$CP','$ville','$telephone1','$telephone2')";
            $bd->exec($requete);
        }
        catch(PDOException $e)
        {
            ;
        }
    }
    
    public function ajouterClientEntrée($sommeVersee,$sommeRendue,$modePaiement)
    {
        return;
    }
}

?>
