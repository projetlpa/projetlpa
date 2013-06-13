<?php
echo'<br><br>';
foreach($uneMedaille as $lesMedailles){
    
     echo "Nom de l'animal : ".'  '.$lesMedailles['nom'];
    foreach($uneRace as $lesRaces)
    {
     echo " &nbsp &nbsp &nbsp Race :".'  '.$lesRaces['libelle'];
    }
    echo " &nbsp &nbsp &nbsp Sexe :".'  '.$lesMedailles['sexe'];
    echo "<br><br> Etat (Stérilisé / non Stérilisé):  ".'  '.htmlentities($lesMedailles['etat']);
    echo " &nbsp &nbsp &nbsp Date de Stérilisation : ".' '.htmlentities($lesMedailles['dateSterilisation']);
    echo " &nbsp &nbsp &nbsp Numero tatouage : ".' '.$lesMedailles['numTatouage'];
    echo " &nbsp &nbsp &nbsp Emplacement tatouage : ".' '.$lesMedailles['emplacementTatouage'];
    echo "<br><br>  Numero Puce Electronique : ".' '.$lesMedailles['numPuceElectronique'];
    foreach ($lesVaccins1 as $unVaccin)
    {
        echo " &nbsp &nbsp &nbsp Vaccin 1 : ".' '.htmlentities($unVaccin['libelle']);

    }
    
    echo " &nbsp &nbsp &nbsp Date vaccin numéro 1 : ".' '.$lesMedailles['dateVaccin1'];
    echo " &nbsp &nbsp &nbsp Rappel vaccin numéro 1 : ".' '.$lesMedailles['rappelVaccin1'];
    
    foreach($lesVaccins2 as $unVaccin2)
    {
        echo "<br><br> Vaccin 2 :".' '.$unVaccin2['libelle'];
    }
    echo "&nbsp &nbsp &nbsp Date vaccin numéro 2 :".' '.htmlentities($lesMedailles['dateVaccin2']);
    echo "&nbsp &nbsp &nbsp Rappel vaccin numéro 2:".' '.$lesMedailles['rappelVaccin2'];
    echo "&nbsp &nbsp &nbsp Date de Naissance : ".' '.$lesMedailles['dateNaissance'];
    echo "<br><br> Age approximatif : ".' '.$lesMedailles['ageApproximatif'];
    echo "&nbsp &nbsp &nbsp Mois Approximatif : ".' '.$lesMedailles['moisApproximatif'];
    
    foreach ($lesTailles as $uneTaille)
    {
         echo "&nbsp &nbsp &nbsp Taille :".' '.$uneTaille['libelle'];
    }
    
    foreach($lesOreilles as $uneOreille)
    {
        echo "&nbsp &nbsp &nbsp Oreille :".' '.$uneOreille['libelle'];
    }
    
    foreach($lesQueues as $uneQueue)
    {
        echo "<br><br> Taille Queue :".' '.$uneQueue['libelle'];
    }
    
    
}
?>

<br><br>



     <label for="numeroClient"> Client n° </label>
<input id="numClient" name="numClient" type="text">&nbsp;&nbsp;&nbsp;


     <label for="referenceAnimal"> Ref.Animal </label>
     <select name="refAnimal">
         <?php
         
         foreach($lesAnimaux as $unAnimal)
         {
                
             echo'<option value="'.$unAnimal['id'].'">'.$unAnimal['id'].'</option>';
             
            
         }
                    
         
         
         ?>
     </select>&nbsp;&nbsp;&nbsp;  
     <br>
<label for="typeSortie">Type de sortie </label>&nbsp;&nbsp;&nbsp;


<label for="medailleImmatriculation"> Médaille d'Immatriculation </label>
<input id="medailleImmatriculation" name="medailleImmatriculation" type="text">&nbsp;&nbsp;&nbsp;


<label for="dateDeSortie"> Date de sortie  </label>
<input id="dateSortie" name="medailleImmatriculation" type="date">&nbsp;&nbsp;&nbsp;


<label for="heureDeSortie"> Heure de sortie </label>
<input id="heureDeSortie" name="heureDeSortie" type="time">&nbsp;&nbsp;&nbsp;

<br>
<label for="responsableSortie">Responsable de la sortie</label>   
<input id="responsableSortie" name="ResponsableSortie" type="text">&nbsp;&nbsp;&nbsp;


<label for="titreCourtoisie">TitreCourtoisie</label>
<input id="titreCourtoisie" name="titreCourtoisie" type="text">&nbsp;&nbsp;&nbsp;

<br>
<label for="nom"> Nom </label>
<input id="nom" name="nom" type="text">&nbsp;&nbsp;&nbsp;


<label for="prenom"> Prénom </label>
<input id="prenom" name="prenom" type="text">&nbsp;&nbsp;&nbsp;


<label for="pieceIdentite"> Piece d'identité </label>
<input id="pieceIdentite" name="pieceIdentite" type="text">&nbsp;&nbsp;&nbsp;

<br>
<label for="n°"> Numéro </label>
<input id="numeroPiece" name="numeroPiece" type="text">&nbsp;&nbsp;&nbsp;


<label for="delivreeLe"> Délivré Le </label>
<input id="delivreeLe" name="delivreeLe" type="text">&nbsp;&nbsp;&nbsp;


<label for="par"> Par : </label>
<input id="par" name="par" type="text">&nbsp;&nbsp;&nbsp;


<label for="adresse"> Adresse : </label>
<input id="adresse" name="adresse" type="text">&nbsp;&nbsp;&nbsp;

<br>
<label for="ville"> Ville : </label>
<input id="ville" name="ville" type="text">


<label for="codePostal"> Code Postal : </label>
<input id="codePostal" name="medailleImmatriculation" type="text">&nbsp;&nbsp;&nbsp;


<label for="telephone"> Téléphone :</label>
<input id="telephone1" name="telephone1" type="text">





   
    
    
    
    
    
    
    

