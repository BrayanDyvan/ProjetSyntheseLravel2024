
     // Image 

//     var modalElementImage = document.getElementById("staticBackdrop2");
//     var modalImage = new bootstrap.Modal(modalElementImage, {
    
//     backdrop: 'static',
    
//     keyboard: false
//     });

var form4=document.querySelector('.form4');

var textIm=form4.textContent;
var ter3 =document.querySelector('.ter3');

 if (textIm.trim()==='L\'image a été assigné avec succès.') {
    
    ter3.classList.remove('d-none');
}