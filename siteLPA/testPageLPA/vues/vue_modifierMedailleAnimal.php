<br><br>
<form method='POST' action='index.php?uc=admin&action=modifierLaMedaille'>
    
    <select id="unAnimal" name="unAnimal">
        
        <?php
        
        foreach($lesAnimaux as $unAnimal)
        {
            echo '<option value="'.$unAnimal['id'].'">'.$unAnimal['nom']."</option>";
            
        }
       
        ?>
        
        
    </select>
      
<br><br> 
        
        <label for="modifierMedaille">INSERER LE NOUVEAU NUMERO MEDAILLE:</label>
        <br>
    <input id="modifierMedaille" type="text" name="modifierMedaille" placeholder="Entrez le numéro de médaille">
        
    <input type="submit" value="Modifier">
</form>


