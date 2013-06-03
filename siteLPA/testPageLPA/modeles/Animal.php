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
        
        /**
         * 
         * @param type $idEspece qui correspond a l'id espece
         * @param type $idRace qui correspond a l'identifiant associé a la race de l'animal
         * @param type $numMedaille qui correspond au numéro de médaille
         * @param type $sexe qui correspond au sexe de l'animal
         * @param type $etat qui correspond a l'état animal ( stérilisé ou non )
         * @param type $dateSterilisation qui correspond à sa date de stérilisation
         * @param type $idCollier qui correspond à l'identifiant associé au collier
         * @param type $numTatouage qui correspond au numéro de tatouage de l'animal
         * @param type $emplacementTatouage qui correspond a l'emplacement ou est tatoué l'animal
         * @param type $numPuceElectronique qui correspond au numéro de puce éléctronique associé a l'animal
         * @param type $refVaccin1 qui correspond //
         * @param type $dateVaccin1 qui correspond //
         * @param type $rappelVaccin1 qui correspond // INFORMATIONS CONCERNANTS LES VACCINS ASSOCIEES A L'ANIMAL
         * @param type $refVaccin2 qui correspond //
         * @param type $dateVaccin2 qui correspond //
         * @param type $rappelVaccin2 qui correspond //
         * @param type $dateNaissance qui correspond a la date de naissance de l'animal
         * @param type $ageApproximatif qui correspond a l'age approximatif de l'animal
         * @param type $moisApproximatif qui correspond au mois approximatif de l'animal 
         * @param type $nom qui correspond au nom donné a l'animal
         * @param type $idTaille qui correspond a l'identifiant associé a la taille de l'animal
         * @param type $idOreille qui correspond a l'identifiant associé au type d'oreilles de l'animal
         * @param type $idPoil qui correspond à l'identifiant associé au type de poils de l'animal
         * @param type $idTailleQueue qui correspond à l'identifiant associé a la taille de queue de l'animal
         * @param type $etatAnimal qui correspond à l'état de l'animal (bon, mauvais ......etc..)
         * @param type $couleurPrincipale qui correspond à la couleur principale de l'animal
         * @param type $couleurSecondaire qui correspond à la couleur secondaire de l'animal
         * @param type $signeParticulier qui correspond au signe particulier que peux posséder l'animal
         * @param type $motif qui correspond au motif pour lequel l'animal fut apporté
         * @param type $observation qui correspond aux observations particulières à propos de l'animal
         * @param type $mordeur qui indique si l'animal est mordeur ou non
         * @param type $controleSanitaireLpa qui informe si l'animal à fait objet d'un controle sanitaire ou non
         * @param type $typeEntree qui correspond à l'identifiant associé au type d'entrée de l'animal ( trouvé, abandon...etc.... )
         * @param type $refClient qui correspond à l'identifiant associé au client.
         * @return type
         */
        
        
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
                  
        
                                                   /// RECUPERER TOUT ANIMAL ///
        /**
         * 
         * @return type $lesAnimaux qui retourne un tableau contenant tous les animaux enregistrés 
         */
        public static function getLesAnimaux()
        {
            try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete = "select * from animal";
            $resultat=$bd->query($requete);
            $lesAnimaux= $resultat->fetchAll();
            return $lesAnimaux;
            }
            catch(PDOException $e)
            {
                echo $e;    
            }           
            
        }
                                                  ///UPDATE MEDAILLE ///
        
        
        /**
         * 
         * @param type $id qui correspond a l'identifiant de l'animal
         * @param type $numMedaille qui correspond au numéro de médaille de l'animal
         */
        public static function modifierMedailleAnimal($id,$numMedaille)
        {
            try{
            $bd=new PDO('mysql:host=localhost;dbname=projetlpa','root','');
            $requete = "UPDATE animal SET numMedaille='$numMedaille' WHERE id='$id'";
            $resultat=$bd->exec($requete);
            
            }
            
            catch(PDOException $e)
            {
                echo $e;    
            }          
        }
                                                      
        
        
        
     
    
    
                                                   /// REQUETES LIEES A LA RECUPERATION DE VALEURS ///
        /**
         * 
         * @return type $lesTypesEspeces qui retourne un tableau contenant les especes
         */
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
        
        /**
         * 
         * @return type $lesRaces qui retourne un tableau contenant toutes les races
         */
        
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
        /**
         * 
         * @return type $lesTailles qui retourne un tableau contenant les tailles.
         */
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
        /**
         * 
         * @return type qui retourne un tableau contenant les oreilles
         */
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
        /**
         * 
         * @return type qui retourne un tableau contenant tous les poils
         */
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
        /**
         * 
         * @return type qui retourne un tableau contenant toutes les queues
         */
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
        /**
         * 
         * @return type $lesEtats qui retourne un tableau contenant tous les etats
         */
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
        /**
         * 
         * @return type $lesColliers qui retourne un tableau contenant tous les colliers
         */
        
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
        /**
         * 
         * @return type $lesVaccins qui retourne un tableau contenant touts les vaccins
         */
        
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
         
        /**
         * 
         * @return type $lesEntrees qui retourne un tableau contenant toutes les entrées
         */
        
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
        /**
         * 
         * @return type $lesMedailles qui retourne un tableau contenant toutes les médailles
         */
        
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
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesAnimaux qui retourne un tableau contenant tous les animaux selectionnés selon le numéro de médaille séléctionné
         */
        
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
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesRacesParMedaille qui retourne un tableau contenant toutes les races selon le numéro de médaille séléctionné
         */
        
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
        
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesVaccins1 qui retourne un tableau contenant tous les vaccins selon le numéro séléctionné
         */
        
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
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesVaccins2 qui retourne un tableau contenant tous les vaccins selon le numéro séléctionné
         */
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
        
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesTailles qui retourne un tableau contenant toutes les tailles selon le numéro séléctionné
         */
        
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
        
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesOreilles qui retourne un tableau contenant toutes les oreilles selon le numéro séléctionné
         */
        
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
        
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesPoils qui retourne un tableau contenant tous les types de poils selon le numéro de médaille séléctionné
         */
        
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
        
        /**
         * 
         * @param type $numMedaille qui correspond au numéro de médaille
         * @return type $lesQueues qui retourne un tableau contenant toutes les tailles de queues selon le numéro de médaille séléctionné.
         */
        
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