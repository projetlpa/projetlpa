<?php
class animal{
    
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
	function GetTypeEntree()
	{
		return $this->typeEntree;
	}
    // FONCTION AJOUTER ANIMAL   
        public function ajouterAnimal($id,$idEspece,$idRace,$numMedaille,$sexe,$etat,$dateSterilisation,$idCollier,$numTatouage,$emplacementTatouage,$numPuceElectronique,
								  $refVaccin1,$dateVaccin1,$rappelVaccin1,$refVaccin2,$dateVaccin2,$rappelVaccin2,$dateNaissance,$ageApproximatif,$nom,$idTaille,
								  $idOreille,$idPoil,$idTailleQueue,$etatAnimal,$couleurPrincipale,$couleurSecondaire,$signeParticulier,$motif,$observation,$mordeur,$controleSanitaireLpa,$typeEntree)
    {//CONNEXION A LA BDD    
		try
		{
			$bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
		}
		catch(PDOException $e)
		{ 
			echo"vous n'etes pas connecté a la base de donnée"; 
		}        
		$requete="INSERT INTO animal VALUES('','$idEspece','$idRace','$numMedaille','$sexe','$etat','$dateSterilisation','$idCollier','$numTatouage','$emplacementTatouage,
				 '$numPuceElectronique','$refVaccin1','$dateVaccin1','$rappelVaccin1','$refVaccin2','$dateVaccin2','$rappelVaccin2','$dateNaissance','$ageApproximatif',
				 '$moisApproximatif','$nom','$idTaille','$idOreille','$idPoil','$idTailleQueue','$etatAnimal','$couleurPrincipale','$couleurSecondaire','$signeParticulier',
				 '$motif','$observation','$mordeur','$controleSanitaireLpa','$typeEntree')";  
		$bd->exec($requete);
    } 

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
}
?>