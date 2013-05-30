<?php


class Client{
    
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $CP;
    private $ville;
    private $telephone1;
    private $telephone2;
    private $idEtatClient;
    
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
    function getIdEtatClient()
    {
        return $this->idEtatClient;
    }
    // FONCTION AJOUTER CLIENT
    
    public static function ajoutClient($nom,$prenom,$adresse,$CP,$ville,$telephone1,$telephone2,$idEtatClient)
    {      
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="INSERT INTO client VALUES('','$nom','$prenom','$adresse','$CP','$ville','$telephone1','$telephone2','$idEtatClient')";
            $nbLignes=$bd->exec($requete);
            if ($nbLignes===FALSE)
            {
                $resultat="erreur $requete";
            }
            else
            {
                $resultat="ok";
            }
        }
        catch(PDOException $e)
        {
            $resultat=$e->getMessage();
        }
        return $resultat;
    }
    
    public static function getEtatClient()
    {
     try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT id,libelle from etatclient";
            $resultat=$bd->query($requete);
            $lesEtats=$resultat->fetchAll();
            return $lesEtats;
        }
        catch (PDOException $e)
        {
            echo $e;    
                  
        }
    }
    
    public static function getClient()
    {
        
       try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT * from client";
            $resultat=$bd->query($requete);
            $lesClients=$resultat->fetchAll();
            return $lesClients;
        }
        catch (PDOException $e )
        {
            echo $e;    
                  
        }
        
        
    }
    
    
    
    
    
    
    
}

?>
