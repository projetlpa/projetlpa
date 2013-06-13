<h2>ENREGISTREZ UNE NOUVELLE ENQUETE</h2>

<form method="POST" action="index.php?uc=enquete&action=ajouterUneDemandeEnquete">
    
    
        <label for="N° client entree">Client entrée :</label>  
        <select id="clientEntree" name="idClientEntree">
	<?php
		foreach($lesClientsEntree as $unClientEntree)
		{
			echo '<option value ="'.$unClientEntree['id'].'">'.$unClientEntree['nom']." ".$unClientEntree['prenom']." ".htmlentities($unClientEntree['adresse'])." ".$unClientEntree['ville'].'</option>';
		}
	?>       
        </select>
        
        
        <label for="dateDemande">Date Demande :</label>
        <input id="dateDemande" name="dateDemande" type="date"/>
        <br><br>
        
        <label for="observation">Observation :</label>
        <input id="observation" name="observation" type="text" />
        <br><br>

        <label for="demandeurAnonyme">Le demandeur est-il anonyme ?</label><br><br>
        <input type="radio" id="anonyme1" name="anonyme" value = "oui" onchange="check();" /><label for="oui"> oui</label><br />
        <input type="radio" id="anonyme2" name="anonyme" value = "non" onchange="check();" /><label for="non"> non</label><br />
        <br><br>          

        <!-- input a affiché lorsque la case non de "demandeurAnonyme" est saisie (gerer avec le script "anonyme.js") -->
        <div id="inputNomDemandeur">
            <label for="nomDuDemandeur">Nom du demandeur :</label>
            <input id="nomDuDemandeur" name="inputNomDemandeur" type="text"/>
            <br><br>
        </div>
       
        <label for="informateur">Le ou les informateur(s) :</label>
        <br><br>
        
        <label for="informateur1">Informateur n°1 :</label>
	<select id="informateur1" name="informateur1">
	<?php	
            foreach($lesInformateurs as $unInformateur)
            {
		echo '<option value ="'.$unInformateur['id'].'">'.htmlentities($unInformateur['libelle']).'</option>';
            }
	?>
	</select>
        
        <label for="informateur2">Informateur n°2 :</label>
	<select id="informateur2" name="informateur2">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun informateur
            echo '<option value =0>AUCUN</option>'; 
            foreach($lesInformateurs as $unInformateur)
            {
		echo '<option value ="'.$unInformateur['id'].'">'.htmlentities($unInformateur['libelle']).'</option>';
            }
	?>
	</select>
       
        <label for="informateur3">Informateur n°3 :</label>
	<select id="informateur3" name="informateur3">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun informateur
            echo '<option value =0>AUCUN</option>';
            foreach($lesInformateurs as $unInformateur)
            {
		echo '<option value ="'.$unInformateur['id'].'">'.htmlentities($unInformateur['libelle']).'</option>';
            }
	?>
	</select>
        
        <label for="informateur4">Informateur n°4 :</label>
	<select id="informateur4" name="informateur4">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun informateur
            echo '<option value =0>AUCUN</option>';
            foreach($lesInformateurs as $unInformateur)
            {
		echo '<option value ="'.$unInformateur['id'].'">'.htmlentities($unInformateur['libelle']).'</option>';
            }
	?>
	</select>        
        <br><br>
        
        <label for="lesFaits">Le ou les fait(s) reproché(s) :</label>
        <br><br> 
        
        <label for="faitReproché1">Fait Reproché n°1 :</label>
	<select id="faitReproché1" name="faitReproché1">
	<?php
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br>
        
        <label for="faitReproché2">Fait Reproché n°2 :</label>
	<select id="faitReproché2" name="faitReproché2">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun faitReproché
            echo '<option value =0>AUCUN</option>';
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br>
        
        <label for="faitReproché3">Fait Reproché n°3 :</label>
	<select id="faitReproché3" name="faitReproché3">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun faitReproché
            echo '<option value =0>AUCUN</option>';
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br>
        
        <label for="faitReproché4">Fait Reproché n°4 :</label>
	<select id="faitReproché4" name="faitReproché4">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun faitReproché
            echo '<option value =0>AUCUN</option>';
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br>
        
        <label for="faitReproché5">Fait Reproché n°5 :</label>
	<select id="faitReproché5" name="faitReproché5">
	<?php	
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun faitReproché
            echo '<option value =0>AUCUN</option>';
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br>
        
        <label for="faitReproché6">Fait Reproché n°6 :</label>
	<select id="faitReproché6" name="faitReproché6">
	<?php
            // si l'utilisateur saisi "AUCUN" dans la liste déroulante, il ajoute "0" dans la BDD qui correspond à aucun faitReproché
            echo '<option value =0>AUCUN</option>';
            foreach($lesFaitsReproches as $unFait)
            {
                echo '<option value ="'.$unFait['id'].'">'.htmlentities($unFait['libelle']).'</option>';
            }
	?>
	</select>
        <br><br>
    
    <input id="submit" type="submit" value="Valider"/>
      
</form>