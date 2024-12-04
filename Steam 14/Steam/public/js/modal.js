 window.onload = () => {
  

    var modalElement = document.getElementById("modalEquipe");
    var modal = new bootstrap.Modal(modalElement, {
    
    backdrop: 'static',
    
    keyboard: false
    });

   


//     var nomJeu =document.querySelector("input[id='nomJeu']");



     var ter1 =document.querySelector('.ter1');

     var form2=document.querySelector('.form2');

     var text=form2.textContent;

  
    
    if (text.trim()==='La catégorie a été assignée  avec succès.') {
    

      

        
      ter1.classList.remove('d-none');

       
   }


    
// enregistrerVer.addEventListener('submit',(evt)=>{
//     evt.preventDefault();
//         let value=evt.target.value;

//         var errorVersion=document.querySelector('#errorNomVersion');
//         var nomVersion =document.querySelector("input[id='nomVersion']");

//         if (nomVersion.value==="") {
//             console.log(nomVersion);
             
//             modalVer.show();
//         }
// })
    


    
 }


