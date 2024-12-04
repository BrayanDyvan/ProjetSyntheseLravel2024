window.onload = () => {

    var avatar=document.querySelector('.avatar');
    var profil=document.querySelector('.profil');

 avatar.addEventListener('mouseover',(evt)=>{
        evt.preventDefault();
            let value=evt.target.value;
    
            profil.classList.remove('d-none');
    });
    
    profil.addEventListener('mouseover',(evt)=>{
        evt.preventDefault();
            let value=evt.target.value;
    
            profil.classList.remove('d-none');
    });
    profil.addEventListener('mouseout',(evt)=>{
        evt.preventDefault();
            let value=evt.target.value;
    
            profil.classList.add('d-none');
    });
}