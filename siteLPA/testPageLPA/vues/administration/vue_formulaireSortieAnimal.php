<br><br>
<h2>SORTIE ANIMAL(Selection obligatoire)</h2>
<form method="POST" action="index.php?uc=admin&action=enregistrerSortie">
    <label for="numMedaille" >SELECTIONNEZ LE NUMERO DE MEDAILLE DE L'ANIMAL</label>
    <select name="numMedaille">
        <?php
             foreach($selectMedaille as $selectionMedaille)
             {
                 echo '<option value='.$selectionMedaille['numMedaille'].'>'.$selectionMedaille['numMedaille'].'</option>';
             }
        ?>
        
        
    </select>
    
    <input id="boutonValiderMedaille" value="Valider" type="submit">
</form>

<!-- ICI ON AURA LA SUITE DU FORMULAIRE OU BIEN SUR UNE AUTRE PAGE -->




















