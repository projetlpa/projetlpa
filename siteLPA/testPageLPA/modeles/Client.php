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
    private $delinquant;
    
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
    function getDelinquant()
    {
        return $this->delinquant;
    }
    // FONCTION AJOUTER CLIENT
    
    /**
     * 
     * @param type $nom qui correspond au nom du client
     * @param type $prenom qui correspond au prénom du client
     * @param type $adresse qui correspond a l'adresse du client
     * @param type $CP qui correspond au code postal
     * @param type $ville qui correspond a la ville
     * @param type $telephone1 qui correspond au numéro de téléphone fixe
     * @param type $telephone2 qui correspond au numéro de téléphone portable ( si il y'a et inversement =
     * @param type $idEtatClient correspond a l'identifiant associé a l'état du client ( entrée ou sortie )
     * @return type $resultat qui retourne bon si la requete a correctement été executée et une erreur dans l'autre cas
     */
    
    public static function ajoutClient($nom,$prenom,$adresse,$CP,$ville,$telephone1,$telephone2,$idEtatClient,$delinquant)
    {      
        try
        {
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="INSERT INTO client VALUES('','$nom','$prenom','$adresse','$CP','$ville','$telephone1','$telephone2','$idEtatClient','$delinquant')";
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
    
    
                                         ///////////////////////////////////////////////////////////////////////////
    
    /**
     * 
     * @return type $lesEtats 
     */
    
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
    
    /**
     * 
     * @return type $lesClients qui retourne un tableau contenant tous les Clients déja présents
     */
    
     public static function getClient()
    {
        
       try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT * FROM client ORDER BY nom ASC";
            $resultat=$bd->query($requete);
            $lesClients=$resultat->fetchAll();
            return $lesClients;
        }
        catch (PDOException $e )
        {
            echo $e;    
                  
        }
        
        
    }
    
    /**
     * 
     * @return type $lesClients qui retourne un tableau contenant tous les Clients Entree déjà présents.
     */
    
    public static function getClientEntree()
    {
        
       try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete="SELECT * FROM client WHERE idEtatClient=1 ORDER BY nom ASC";
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
