<br><br>
<h2>RECHERCHE ANIMAL PAR MEDAILLE</h2>
<form method="POST" action="index.php?uc=recherche&action=rechercheParMedaille">
    
     <label for="rechercheParMedaille">Saisir le numéro de médaille:</label>
     <select name="rechercheParMedaille">
         
         <?php
         
         foreach($selectMedaille as $selectionMedaille)  
         {
             echo '<option value='.$selectionMedaille['numMedaille'].'>'.$selectionMedaille['numMedaille'].'</option>';
         }
         
         ?>
         
         
     </select>
   
    
    <input id="submit" type="submit" value="Valider">
    
    
    
</form>
      