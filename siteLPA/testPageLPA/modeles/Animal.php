<?php
class Animal{
    
    private $id;
    private $idEspece;
    private $idRace;
    private $numMedaille;
    private $sexe;
    private $etat;      
    private $dateSterilisation;
    private $idCollier;
    private $numTatouage;
    private $emplacementTatouage;
    private $numPuceElectronique;
    private $refVaccin1;
    private $dateVaccin1;
    private $rappelVaccin1;
    private $refVaccin2;
    private $dateVaccin2;
    private $rappelVaccin2;
    private $dateNaissance;
    private $ageApproximatif;
    private $moisApproximatif;
    private $nom;
    private $idTaille;
    private $idOreille;
    private $idPoil;
    private $idTailleQueue;
    private $etatAnimal;
    private $couleurPrincipal;
    private $couleurSecondaire;
    private $signeParticulier;
    private $motif;
    private $observation;
    private $mordeur;
    private $controleSanitaireLpa;
    private $typeEntree;
    private $refClient;
	
    function getId()
	{     
        return $this->id;   
    }
    function getIdEspece()
    {	
        return $this->idEspece;
    }
    function getIdRace()
	{    
        return $this->idRace;
    }
    function getNumMedaille()
	{
        return $this->numMedaille;
    }
    function getEtat()
	{
        return $this->etat;
    }
    function getDateSterilisation()
	{
        return $this->dateSterilisation;
    }
    function getidCollier()
	{
        return $this->idCollier;
    }
	function getNumTatouage()
	{
		return $this->numTatouage;
	}
	function getEmplacementTatouage()
	{
		return $this->emplacementTatouage;
	}
        function getNumPuceElectronique()
	{
		return $this->numPuceElectronique;
	}
	function getRefVaccin1()
	{
		return $this->refVaccin1;
	}
	function getDateVaccin1()
	{
		return $this->dateVaccin1;
	}
	function getRappelVaccin1()
	{
		return $this->rappelVaccin1;
	}
		function getRefVaccin2()
	{
		return $this->refVaccin2;
	}
	function getDateVaccin2()
	{
		return $this->dateVaccin2;
	}
	function getRappelVaccin2()
	{
		return $this->rappelVaccin2;
	}
	function getDateNaissance()
	{
		return $this->dateNaissance;
	}
	function getAgeApproximatif()
	{
		return $this->ageApproximatif;
	}
	function getMoisApproximatif()
	{
		return $this->moisApproximatif;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getIdTaille()
	{
		return $this->idTaille;
	}
	function getIdOreille()
	{
		return $this->idOreille;
	}
	function getIdPoil()
	{
		return $this->idPoil;
	}
	function getIdTailleQueue()
	{
		return $this->idTailleQueue;
	}
	function getEtatAnimal()
	{
		return $this->etatAnimal;
	}
	function getCouleurPrincipale()
	{
		return $this->couleurPrincipale;
	}
	function getCouleurSecondaire()
	{
		return $this->couleurSecondaire;
	}
	function getSigneParticulier()
	{
		return $this->signeParticulier;
	}
	function getMotif()
	{
		return $this->motif;
	}
	function getObservations()
	{
		return $this->observations;
	}
	function getMordeur()
	{
		return $this->mordeur;
	}
	function getControleSanitaireLpa()
	{
		return $this->controleSanitaireLpa;
	}
	function getTypeEntree()
	{
		return $this->typeEntree;
	}
        function getRefClient()
        {
            return $this->refClient;
        }
        
    // FONCTION AJOUTER ANIMAL   
        public function ajouterAnimal($idEspece,$idRace,$numMedaille,$sexe,$etat,$dateSterilisation,$idCollier,$numTatouage,$emplacementTatouage,$numPuceElectronique,
								  $refVaccin1,$dateVaccin1,$rappelVaccin1,$refVaccin2,$dateVaccin2,$rappelVaccin2,$dateNaissance,$ageApproximatif,$moisApproximatif,$nom,$idTaille,
								  $idOreille,$idPoil,$idTailleQueue,$etatAnimal,$couleurPrincipale,$couleurSecondaire,$signeParticulier,$motif,$observation,$mordeur,$controleSanitaireLpa,$typeEntree,$refClient)
    {//CONNEXION A LA BDD    
		try
		{
			$bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
		
                
		     
		$requete="INSERT INTO animal VALUES('','$idEspece','$idRace','$numMedaille','$sexe','$etat','$dateSterilisation','$idCollier','$numTatouage','$emplacementTatouage',
				 '$numPuceElectronique','$refVaccin1','$dateVaccin1','$rappelVaccin1','$refVaccin2','$dateVaccin2','$rappelVaccin2','$dateNaissance','$ageApproximatif',
				 '$moisApproximatif','$nom','$idTaille','$idOreille','$idPoil','$idTailleQueue','$etatAnimal','$couleurPrincipale','$couleurSecondaire','$signeParticulier',
				 '$motif','$observation','$mordeur','$controleSanitaireLpa','$typeEntree','$refClient')";  
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
        
        
     
    
    
                                                   /// REQUETES LIEES A LA RECUPERATION DE VALEURS ///

	public static function getLesEspeces()
	{
            try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete = "select espece.id as idEspece,espece.libelle as libelle from espece";
            $resultat=$bd->query($requete);
            $lesTypesEspeces= $resultat->fetchAll();
            return $lesTypesEspeces;
            }
            catch(PDOException $e)
            {
                echo $e;    
            }            
	}
        
        ////////
        
        public static function getLesRaces()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select race.id as idRace,race.libelle as libelle from race";
                $resultat=$bd->query($requete);
                $lesRaces= $resultat->fetchAll();
                return $lesRaces;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesTailles()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select taille.id as idTaille,taille.libelle as libelle from taille";
                $resultat=$bd->query($requete);
                $lesTailles= $resultat->fetchAll();
                return $lesTailles;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesOreilles()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select oreilles.id as idOreille,oreilles.libelle as libelle from oreilles";
                $resultat=$bd->query($requete);
                $lesOreilles= $resultat->fetchAll();
                return $lesOreilles;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesPoils()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select poils.id as idPoil,poils.libelle as libelle from poils";
                $resultat=$bd->query($requete);
                $lesPoils= $resultat->fetchAll();
                return $lesPoils;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesQueues()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select queue.id as idQueue,queue.libelle as libelle from queue";
                $resultat=$bd->query($requete);
                $lesQueues= $resultat->fetchAll();
                return $lesQueues;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesEtats()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select etat.id as idEtat,etat.libelle as libelle from etat";
                $resultat=$bd->query($requete);
                $lesEtats= $resultat->fetchAll();
                return $lesEtats;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesColliers()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select collier.refCollier as idCollier,collier.libelle as libelle from collier";
                $resultat=$bd->query($requete);
                $lesColliers= $resultat->fetchAll();
                return $lesColliers;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        public static function getLesVaccins()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select vaccin.num as idVaccin,vaccin.libelle as libelle from vaccin";
                $resultat=$bd->query($requete);
                $lesVaccins= $resultat->fetchAll();
                return $lesVaccins;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        ////////
        
        
        public static function getLesEntrees()
        {
            try
            {
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete = "select typeentree.id as idEntree,typeentree.libelle as libelle from typeentree";
                $resultat=$bd->query($requete);
                $lesEntrees= $resultat->fetchAll();
                return $lesEntrees;
            }
            catch(PDOException $e)
            {
                echo $e;
            }
            
        }
        
        
        
        ////////
        
        public static function getLesMedailles()
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="select numMedaille from animal";
                $resultat=$bd->query($requete);
                $selectMedaille=$resultat->fetchAll();
                return $selectMedaille;
        }
        catch (PDOException $e)
        {
            echo $e;
        }
             
            
            
        }
        
        
        
        
        
        
        
        
                                                    /// REQUETES LIEES A LA RECHERCHE D'ANIMAL EN RAPPORT AVEC LA MEDAILLE ///
        
        
        ////////
        
        public static function animalParMedaille($numMedaille)
        {
            try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete = "SELECT * FROM animal WHERE numMedaille='$numMedaille'";
            $resultat=$bd->query($requete);
            $lesAnimaux=$resultat->fetchAll();
            return $lesAnimaux;
            }
            catch(PDOException $e)
            {
                echo $e;    
            }   
            
        }
        ////////
        public static function raceParMedaille($numMedaille)
        {
            try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            
            $requete = "SELECT libelle FROM race INNER JOIN animal on animal.idRace=race.id WHERE numMedaille='$numMedaille'";
            $resultat=$bd->query($requete);
            $lesRacesParMedaille=$resultat->fetchAll();
            return $lesRacesParMedaille;
           
            
        }
        catch(PDOException $e)
            {
                echo $e;    
            }   
        }
        ////////
        
        
        public static function vaccin1ParMedaille($numMedaille)
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM vaccin INNER JOIN animal on animal.refVaccin1=vaccin.num WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesVaccins1=$resultat->fetchAll();
                return $lesVaccins1;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
        }
        
        ////////
            
        public static function vaccin2ParMedaille($numMedaille)
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM vaccin INNER JOIN animal on animal.refVaccin2=vaccin.num WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesVaccins2=$resultat->fetchAll();
                return $lesVaccins2;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
            
        }
        ////////
        public static function tailleParMedaille($numMedaille)
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM taille INNER JOIN animal on animal.idTaille=taille.id WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesTailles=$resultat->fetchAll();
                return $lesTailles;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
            
            
        }
        ////////    
        
        public static function oreilleParMedaille($numMedaille)
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM oreilles INNER JOIN animal on animal.idOreilles=oreilles.id WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesOreilles=$resultat->fetchAll();
                return $lesOreilles;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
            
        }
        
        ////////
        
        public static function poilsParMedaille($numMedaille)
        {
            
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM poils INNER JOIN animal on animal.idPoil=poils.id WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesPoils=$resultat->fetchAll();
                return $lesPoils;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
        }
        
        ////////
        
        public static function tailleQueueParMedaille($numMedaille)
        {
            try{
                $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
                $requete="SELECT libelle FROM queue INNER JOIN animal on animal.idTailleQueue=queue.id WHERE numMedaille='$numMedaille'";
                $resultat=$bd->query($requete);
                $lesQueues=$resultat->fetchAll();
                return $lesQueues;
                
        }
        catch (PDOException $e)
        {
            echo $e;
        }
            
        }
         
        ////////
        
        
            
        
                
       
        
}
?>