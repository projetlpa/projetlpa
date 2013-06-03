<form method='POST' action='index.php?uc=admin&action=ajouterUnClient'>
           <h2>ENREGISTREZ UN NOUVEAU CLIENT</h2>
           
           <label for="nom">Saisir nom:</label>
    <input id="nom" name="nom" type="text" class="text-field" placeholder="Nom" /><br><br>
    
           <label for="prenom">Saisir prenom:</label>
    <input id="prenom" name="prenom" type="text" class="text-field" placeholder="Prenom" /><br><br>
    
           <label for="adresse">Saisir adresse:</label>
    <input id="adresse" name="adresse" type="text" class="text-field" placeholder="Adresse" /><br><br>
    
           <label for="codePostal">Saisir Code Postal:</label>
    <input id="codePostal" name="codePostal" type="text" class="text-field" placeholder="Code Postal" /><br><br>
    
           <label for="ville">Saisir ville:</label>
    <input id="ville" name="ville" type="text" class="text-field" placeholder="Ville" /><br><br>
    
           <label for="telephone1">Saisir Telephone 1:</label>
    <input id="telephone1" name="telephone1" type="text" class="text-field" placeholder="Téléphone 1" /><br><br>
    
           <label for="telephone2">Saisir Telephone 2:</label>
    <input id="telephone2" name="telephone2" type="text" class="text-field" placeholder="Téléphone 2" /><br><br>
     
    
    <label for="etatClient">Précisez ( Client entrée ou sortie ):</label>
    <select id="etatClient" name="etatClient">
	<?php	
		foreach($lesEtats as $unEtat)
		{
			echo '<option value ="'.$unEtat['id'].'">'.$unEtat['libelle'].'</option>';
			//echo '<option value ="$uneEspece">toto</option>';
		}
	?>
    </select>
    
         
    
    
    
    <input type="submit" value="Enregistrer" class="button" />
   
</form>  