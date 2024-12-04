// version 

//     var modalElementVer = document.getElementById("staticBackdrop1");
//     var modalVer = new bootstrap.Modal(modalElementVer, {
    
//     backdrop: 'static',
    
//     keyboard: false
//     });

var form3=document.querySelector('.form3');

var textVer=form3.textContent;

console.log(textVer);

var ter2 =document.querySelector('.ter2');


 if (textVer.trim()==='La version a été assigné avec succès.') {
   
        
   
    ter2.classList.remove('d-none');
        
    
}
