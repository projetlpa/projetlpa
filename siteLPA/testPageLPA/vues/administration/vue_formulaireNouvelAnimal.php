<h2>ENREGISTREZ UN NOUVEL ANIMAL</h2>
		
<form method='POST' action='index.php?uc=admin&action=ajouterAnimal'>
        
        <label for="refClient"> Client :</label>
                <select id="typeEntree" name="refClient">
	<?php	
		foreach($lesClients as $unClient)
		{
			echo '<option value ="'.$unClient['id'].'">'.$unClient['nom'].'     '.$unClient['prenom'].'     '.$unClient['adresse'].'     '.$unClient['ville'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>            
        <br><br>
    
        <label for="nom">Nom de l'animal :</label>
        <input id="Nom" name="nom" type="text" placeholder="nom" />
    
        <label for="espece">Espèce :</label>
	<select id="espece" name="espece">
	<?php	
		foreach($lesTypesEspeces as $uneEspece)
		{
			echo '<option value ="'.$uneEspece['idEspece'].'">'.$uneEspece['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>
	
	<label for="race">Race :</label>
        <select id="race" name="race">
	<?php	
		foreach($lesRaces as $uneRace)
		{
			echo '<option value ="'.$uneRace['idRace'].'">'.$uneRace['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>

	
	<label for="medaille">N° de médaille :</label>
        <input id="Medaille" name="medaille" type="text" placeholder="n° de medaille" />
	
	<label for="sexe">Sexe :</label>
	<select id="sexe" name="sexe">
		<option value="male">Mâle</option>
		<option value="femelle">Femelle</option>
	</select>	
	<br><br>
	
	<label for="etat">Castré ? :</label>
	<select id="etat" name="etat">
		<option value="oui">Oui</option>
		<option value="non">Non</option>
	</select>
	
	<label for="dateSterilisation">Date de sterilisation :</label>
        <input id="DateSterilisation" name="dateSterilisation" type="date" placeholder="date de sterilisation" />

	<label for="collier">Type de collier :</label>  
        <select id="collier" name="collier">
	<?php	
		foreach($lesColliers as $unCollier)
		{
			echo '<option value ="'.$unCollier['idCollier'].'">'.$unCollier['libelle'].'</option>';
		}
	?>
        </select><br><br>
    	
	<label for="numTatouage">N° de tatouage :</label>
        <input id="NumTatouage" name="numTatouage" type="text" placeholder="numero du tatouage" />
	
	<label for="emplacementTatouage">Emplacement du tatouage :</label>
	<select id="emplacementTatouage" name="emplacementTatouage">
            <option value="aucun">AUCUN</option>
            <option value="oreilleDroite">O.D</option>
            <option value="oreilleGauche">O.G</option>
            <option value="C.G">C.G</option>
            <option value="C.D">C.D</option>
	</select>       
        
	
	<label for="numPuceElectronique">N° de la puce :</label>
        <input id="NumPuceElectronique" name="numPuceElectronique" type="text" placeholder="n° de la puce" /><br><br>
	
	<label for="refVaccin1">Référence du vaccin 1 :</label>
        <select id="refVaccin1" name="refVaccin1">
	<?php	
		foreach($lesVaccins as $unVaccin)
		{
			echo '<option value ="'.$unVaccin['idVaccin'].'">'.$unVaccin['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>        
			
	<label for="dateVaccin1">Date du vaccin 1 :</label>
        <input id="DateVaccin1" name="dateVaccin1" type="date" placeholder="date du vaccin 1" />
		
	<label for="rappelVaccin1">Date de rappel du vaccin 1 :</label>
        <input id="RappelVaccin1" name="rappelVaccin1" type="date" placeholder="rappel vaccin 1" /><br><br>
	
	<label for="refVaccin2">Référence du vaccin 2 :</label>
        <select id="refVaccin2" name="refVaccin2">
	<?php	
		foreach($lesVaccins as $unVaccin)
		{
			echo '<option value ="'.$unVaccin['idVaccin'].'">'.$unVaccin['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>        
        
	<label for="dateVaccin2">Date du vaccin 2 :</label>
        <input id="DateVaccin2" name="dateVaccin2" type="date" placeholder="date du vaccin 2" />
		
	<label for="rappelVaccin2">Date de rappel du vaccin 2 :</label>
        <input id="RappelVaccin2" name="rappelVaccin2" type="date" placeholder="rappel vaccin 2" /><br><br>
	
	<label for="dateNaissance">Date de naissance de l'animal :</label>
        <input id="DateNaissance" name="dateNaissance" type="date" placeholder="date de naissance" />
		
	<label for="ageApproximatif">Age approximatif :</label>
        <input id="AgeApproximatif" name="ageApproximatif" type="text" placeholder="nombre d'année" />
		
	<label for="moisApproximatif">Nombre de mois approximativement :</label>
        <input id="MoisApproximatif" name="moisApproximatif" type="text" placeholder="nombre de mois" /><br><br>
		
	<label for="taille">Taille de l'animal :</label>
        <select id="taille" name="taille">
	<?php	
		foreach($lesTailles as $uneTaille)
		{
                        echo '<option value ="'.$uneTaille['idTaille'].'">'.$uneTaille['libelle'].'</option>';
		}
	?>
	</select>      
			
	<label for="oreille">Type d'oreille :</label>
        <select id="oreille" name="oreille">
	<?php	
		foreach($lesOreilles as $uneOreille)
		{
			echo '<option value ="'.$uneOreille['idOreille'].'">'.$uneOreille['libelle'].'</option>';
		}
	?>
	</select>       
        		
	<label for="poil">Type de poil :</label>
        <select id="poil" name="poil">
	<?php	
		foreach($lesPoils as $unPoil)
		{
			echo '<option value ="'.$unPoil['idPoil'].'">'.$unPoil['libelle'].'</option>';
		}
	?>
	</select>
				
	<label for="queue">Taille de la queue :</label>
        <select id="queue" name="queue">
	<?php	
		foreach($lesQueues as $uneQueue)
		{
			echo '<option value ="'.$uneQueue['idQueue'].'">'.$uneQueue['libelle'].'</option>';
		}
	?>
	</select>
			
	<label for="etatAnimal">Etat de l'animal :</label>
        <select id="etatAnimal" name="etatAnimal">
	<?php	
		foreach($lesEtats as $unEtat)
		{
			echo '<option value ="'.$unEtat['idEtat'].'">'.$unEtat['libelle'].'</option>';
		}
	?>
	</select><br><br>
			
	<label for="couleurPrincipale">Couleur principale :</label>
        <input id="CouleurPrincipale" name="couleurPrincipal" type="text" placeholder="couleur principale" />		
			
	<label for="couleurSecondaire">Couleur secondaire :</label>
        <input id="CouleurSecondaire" name="couleurSecondaire" type="text" placeholder="couleur secondaire" /><br><br>
				
	<label for="signeParticulier">Signe particulier :</label>
        <input id="SigneParticuler" name="signeParticulier" type="text" placeholder="signe particulier" />
				
	<label for="motif">Motif de l'abandon,du dépot ou le lieu de trouvaille :</label>
        <input id="Motif" name="motif" type="text" placeholder="motif" />
				
	<label for="observation">Observation :</label>
        <input id="Observation" name="observation" type="text" placeholder="observation" />	
			
	<label for="mordeur">Mordeur ? :</label>
	<select id="mordeur" name="mordeur">
                <option value="oui">OUI</option>
                <option value="non">NON</option>
	</select> 
       			
	<label for="controleSanitaireLpa">Controle sanitaire LPA :</label>
	<select id="controleSanitaireLpa" name="controleSanitaireLpa">
                <option value="oui">OUI</option>
                <option value="non">NON</option>
	</select>
        <br><br>
				
	<label for="typeEntree">Type d'entree :</label>
                <select id="typeEntree" name="typeEntree">
	<?php	
		foreach($lesEntrees as $uneEntree)
		{
			echo '<option value ="'.$uneEntree['idEntree'].'">'.$uneEntree['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>
        <br><br>
	
        
        
        <input type="submit" value="Enregistrer" class="button" />
        <br><br>
       </form>   