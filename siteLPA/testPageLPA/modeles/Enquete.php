<?php

class Enquete{
    
    private $id;
    private $idClientEntree;
    private $DateDemande;
    private $fait1;
    private $fait2;
    private $fait3;
    private $fait4;
    private $fait5;
    private $fait6;
    private $fait7;

    function getId()
    {
        return $this->id;
    }
    
    function getIdClientEntree()
    {
        return $this->idClientEntree;
    }
    
    function getDateDemande()
    {
        return $this->DateDemande;
    }
    
    public static function ajouterEnquete($idClientEntree,$DateDemande)
    {
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="INSERT INTO enquete VALUES('','$idClientEntree','$DateDemande')";
            $nbLignes=$bd->exec($requete);
            if ($nbLignes===FALSE)
            {
                $resultat="erreur $requete";
            }
            else
            {
                $resultat="L'enquête a été ajouté à la base de donnée";
            }
        }
        catch (PDOException $e)
        {
            $resultat=$e->getMessage();
        }
        return $resultat;
    }
    
        
    public static function getLesInformateurs()
    {
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT refSignalePar as id,signalePar as libelle FROM informateurs";
            $resultat=$bd->query($requete);
            $lesInformateurs=$resultat->fetchAll();
            return $lesInformateurs;
        }
        catch (PDOException $e)
        {
            echo $e;         
        }
    }
    
    public static function getLesFaitsReproches()
    {
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT refFaitReproche as id,faitReproche as libelle FROM faitsreproches";
            $resultat=$bd->query($requete);
            $lesFaitsReproches=$resultat->fetchAll();
            return $lesFaitsReproches;
        }
        catch (PDOException $e)
        {
            echo $e;         
        }
    }
}
?>
