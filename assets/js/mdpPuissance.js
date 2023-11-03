let mdpInput = document.querySelector('#mdpInput input[type="password"]');
        let mdpPuissance= document.getElementById('mdpPuissance');
        let faible = document.querySelector('#mdpPuissance #faible');
        let moyen = document.querySelector('#mdpPuissance #moyen');
        let fort = document.querySelector('#mdpPuissance #fort');
        let mdpInfo = document.getElementById('mdpInfo');
      
        let faibleRegExp = /[a-z]/;
        let moyenRegExp = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/;
        let fortRegExp = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}/;

        mdpInput.oninput= function(){
       
             let passwordValue= mdpInput.value;
             let passwordLength= passwordValue.length;
    
             let faiblePassword= passwordValue.match(faibleRegExp);
             let moyenPassword= passwordValue.match(moyenRegExp);
             let fortPassword= passwordValue.match(fortRegExp);
    
     if(passwordValue != ""){
    
         mdpPuissance.style.display = "block";
         mdpPuissance.style.display = "flex";
         mdpInfo.style.display = "block";
         faiblemdpPuissance(faiblePassword, moyenPassword, fortPassword);
         moyenmdpPuissance(faiblePassword, moyenPassword, fortPassword);
         fortmdpPuissance(faiblePassword, moyenPassword, fortPassword);
       }else{
         
         mdpPuissance.style.display = "none";
         mdpInfo.style.display = "none";
        
       }
     }
    
    function faiblemdpPuissance( faiblePassword, moyenPassword, fortPassword){
    
          if(faiblePassword || moyenPassword || fortPassword)
            {
           faible.classList.add("active");
           mdpInfo.style.display = "block";
           mdpInfo.style.color = "red";
           mdpInfo.textContent = "faible";
              
            }
    }
    
    function moyenmdpPuissance(faiblePassword, moyenPassword, fortPassword){
       if(faiblePassword && (moyenPassword || fortPassword))
        {
         moyen.classList.add("active");
         mdpInfo.textContent = "moyen";
         mdpInfo.style.color = "orange";
       
       }else{
         moyen.classList.remove("active");
         
       }
    }
    
    function fortmdpPuissance(faiblePassword, moyenPassword, fortPassword){
    
      if((faiblePassword && moyenPassword) && fortPassword)
        {
         faible.classList.add("active");
         moyen.classList.add("active");
         fort.classList.add("active");
         mdpInfo.textContent = "fort";
         mdpInfo.style.color = "green";
       }else{
         fort.classList.remove("active");
         
       }
    }