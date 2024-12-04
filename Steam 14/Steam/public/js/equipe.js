// equipe 

window.onload = () => {
  
  
    var modalElement = document.getElementById("modalEquipe");
    var cache=document.getElementById("cache");
    var close=document.getElementById("close");
    var modal = new bootstrap.Modal(modalElement, {
    
    backdrop: 'static',
    
    keyboard: false
    });

    cache.addEventListener('click',(evt)=>{
        evt.preventDefault();
        modal.hide();
    })
    close.addEventListener('click',(evt)=>{
        evt.preventDefault();
        modal.hide();
    })
    modal.show();

var formEquipe=document.querySelector('.formEquipe');

var textEquipe=formEquipe.textContent;

console.log(textEquipe.trim());




 if (textEquipe.trim()==="L\'équipe a été crée avec succès.") {
   console.log("yes");

    modal.hide();

}


}