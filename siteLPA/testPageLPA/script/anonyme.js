function check() {
   
        var caseOui = document.getElementById('anonyme1'),
        formNomDemandeur = document.getElementById('inputNomDemandeur');
    
          if (caseOui.checked == true) 
              {
                  formNomDemandeur.style.display='none';
              }
          else
              {
                  formNomDemandeur.style.display='block';
              }
      }