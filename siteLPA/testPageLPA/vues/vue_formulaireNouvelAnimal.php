<h2>ENREGISTREZ UN NOUVEL ANIMAL</h2>
		
<form method='POST' action='index.php?uc=admin&action=ajouterNouvelAnimal'>
	
    <label for="espece">Saisir l'espèce :</label>
	<select id="espece" name="espece">
	<?php	
		foreach($lesTypesEspeces as $uneEspece)
		{
			echo '<option value ="'.$uneEspece['idEspece'].'">'.$uneEspece['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
	</select>
	
	<label for="race">Saisir la race :</label>
    <input id="Race" name="race" type="text" placeholder="race" /><br><br>
	
	<label for="medaille">Saisir le n° de médaille :</label>
    <input id="Medaille" name="medaille" type="text" placeholder="n° de medaille" /><br><br>
	
	<label for="sexe">Saisir le sexe :</label>
	<select id="sexe" name="sexe">
		<option value="male">Mâle</option>
		<option value="femelle">Femelle</option>
	</select>	
	<br><br>
	
	<label for="etat">Saisir s'il est castré ou non :</label>
	<select id="etat" name="etat">
		<option value="oui">Oui</option>
		<option value="non">Non</option>
	</select>
	<br><br>
	
	<label for="dateSterilisation">Saisir la date de sterilisation :</label>
    <input id="DateSterilisation" name="dateSterilisation" type="text" placeholder="date de sterilisation" /><br><br>

	<label for="collier">Saisir le type de collier :</label>
    <input id="Collier" name="collier" type="text" placeholder="type de collier" /><br><br>
	
	<label for="numTatouage">Saisir le numero de tatouage :</label>
    <input id="NumTatouage" name="numTatouage" type="text" placeholder="numero du tatouage" /><br><br>
	
	<label for="emplacementTatouage">Saisir l'emplacement du tatouage :</label>
    <input id="EmplacementTatouage" name="emplacementTatouage" type="text" placeholder="emplacement du tatouage" /><br><br>
	
	<label for="numPuceElectronique">Saisir le numero de la puce :</label>
    <input id="NumPuceElectronique" name="numPuceElectronique" type="text" placeholder="n° de la puce" /><br><br>
	
	<label for="refVaccin1">Saisir la référence du vaccin 1 :</label>
    <input id="RefVaccin1" name="refVaccin1" type="text" placeholder="reference du vaccin 1" /><br><br>
			
	<label for="dateVaccin1">Saisir la date du vaccin 1 :</label>
    <input id="DateVaccin1" name="dateVaccin1" type="text" placeholder="date du vaccin 1" /><br><br>
		
	<label for="rappelVaccin1">Saisir la date de rappel du vaccin 1 :</label>
    <input id="RappelVaccin1" name="rappelVaccin1" type="text" placeholder="rappel vaccin 1" /><br><br>
	
	<label for="refVaccin2">Saisir la référence du vaccin 2 :</label>
    <input id="RefVaccin2" name="refVaccin2" type="text" placeholder="reference du vaccin 2" /><br><br>
			
	<label for="dateVaccin2">Saisir la date du vaccin 2 :</label>
    <input id="DateVaccin2" name="dateVaccin2" type="text" placeholder="date du vaccin 2" /><br><br>
		
	<label for="rappelVaccin2">Saisir la date de rappel du vaccin 2 :</label>
    <input id="RappelVaccin2" name="rappelVaccin2" type="text" placeholder="rappel vaccin 2" /><br><br>
	
	<label for="dateNaissance">Saisir la date de naissance de l'animal :</label>
    <input id="DateNaissance" name="dateNaissance" type="text" placeholder="date de naissance" /><br><br>
		
	<label for="ageApproximatif">Saisir l'age approximatif :</label>
    <input id="AgeApproximatif" name="" type="text" placeholder="nombre d'année" /><br><br>
		
	<label for="moisApproximatif">Saisir le nombre de mois approximativement :</label>
    <input id="MoisApproximatif" name="moisApproximatif" type="text" placeholder="nombre de mois" /><br><br>
		
	<label for="nom">Saisir le nom de l'animal :</label>
    <input id="Nom" name="nom" type="text" placeholder="nom" /><br><br>
		
	<label for="taille">Saisir la taille de l'animal :</label>
    <input id="Taille" name="taille" type="text" placeholder="taille" /><br><br>
			
	<label for="oreille">Saisir le type d'oreille :</label>
    <input id="Oreille" name="oreille" type="text" placeholder="oreille" /><br><br>
			
	<label for="poil">Saisir le type de poil :</label>
    <input id="Poil" name="poil" type="text" placeholder="poil" /><br><br>
				
	<label for="tailleQueue">Saisir la taille de la queue :</label>
    <input id="TailleQueue" name="tailleQueue" type="text" placeholder="queue" /><br><br>	
			
	<label for="etatAnimal">Saisir l'etat de l'animal :</label>
    <input id="EtatAnimal" name="etatAnimal" type="text" placeholder="etat animal" /><br><br>		
			
	<label for="couleurPrincipale">Saisir la couleur principale :</label>
    <input id="CouleurPrincipale" name="couleurPrincipal" type="text" placeholder="couleur principale" /><br><br>		
			
	<label for="couleurSecondaire">Saisir la couleur secondaire :</label>
    <input id="CouleurSecondaire" name="couleurSecondaire" type="text" placeholder="couleur secondaire" /><br><br>
				
	<label for="signeParticulier">Saisir un signe particulier :</label>
    <input id="SigneParticuler" name="signeParticulier" type="text" placeholder="signe particulier de l'animal" /><br><br>
				
	<label for="motif">Saisir le motif de l'abandon,du dépot ou le lieu de trouvaille :</label>
    <input id="Motif" name="motif" type="text" placeholder="" /><br><br>
				
	<label for="observation">Une observation à faire :</label>
    <input id="Observation" name="observation" type="text" placeholder="observation" /><br><br>	
			
	<label for="mordeur">Est-il mordeur ? :</label>
    <input id="Mordeur" name="mordeur" type="text" placeholder="" /><br><br>	
			
	<label for="controleSanitaireLpa">Controle sanitaire  :</label>
    <input id="ControleSanitaireLpa" name="controleSanitaireLpa" type="text" placeholder="" /><br><br>
				
	<label for="typeEntree">Saisir le type d'entree :</label>
    <input id="TypeEntree" name="typeEntree" type="text" placeholder="type" /><br><br>
	
    <input type="submit" value="Enregistrer" class="button" />
       </form>   