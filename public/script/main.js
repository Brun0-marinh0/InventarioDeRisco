function iniciarModal(Idmodal){
    const mode = document.getElementById('confirm-modal');
    mode.classList.add('mostrar');
    document.getElementById('InputId').value = Idmodal;
    mode.addEventListener('click', function(e){
        if(e.target.id == 'false-destroy'){
            mode.classList.remove('mostrar');
        }
    })
}
function confirmacao(){

    const confirma =  confirm('Você tem certeza?');
    const result = confirma;
}