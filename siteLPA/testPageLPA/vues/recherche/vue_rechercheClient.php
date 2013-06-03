<br><br>
<form name="listeClient">
    
    <select name="leClient">
        
        <?php
        foreach($lesClients as $unClient)
        {
            echo'<option value="'.$unClient['id'].'">'.$unClient['nom'].'  '.$unClient['prenom'].'  '.$unClient['adresse'].'  '.$unClient['CP'].'  '.$unClient['ville']."</option>";
        }
        
        ?>
        
        
    </select>
    
    
    
    
</form>
