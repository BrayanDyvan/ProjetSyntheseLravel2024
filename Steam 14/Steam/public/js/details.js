window.onload = () => {

    var voir=document.querySelector('.voir');
    var video=document.querySelector('#video');

 voir.addEventListener('click',(evt)=>{
        evt.preventDefault();
            let value=evt.target.value;
    
           video.classList.remove('d-none');
    });
}