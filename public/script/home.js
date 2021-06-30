function iniciaModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('mostrar');
    modal.addEventListener('click', function(e){
        if(e.target.id == modalId ||e.target.id == 'cancelar'){
            modal.classList.remove('mostrar');
            document.getElementById('nome_da_maquina').value='';
            document.getElementById('fabricante').value='';
            document.getElementById('modelo').value='';
        }
    })
}

const btn = document.querySelector('#nova');
btn.addEventListener('click', function(){
    iniciaModal('modal-form');});


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

document.querySelector('#pesquisar-btn').addEventListener('click', pesquisar);


function pesquisar(e){

    var filtro = document.getElementById('filtro').value;
    if (filtro == 'tipo'){

        var ColunaTipo = '1';
        var filtrar, tabela, tr, td, th, i;
        filtrar = document.querySelector('#search');
        filtrar =filtrar.value.toUpperCase();
    
        tabela = document.querySelector('#customers');
    
        tr = tabela.getElementsByTagName('tr');
        th = tabela.getElementsByTagName('th');
    
        for (i = 0; i<tr.length; i++){
    
            td = tr [i].getElementsByTagName('td')[ColunaTipo];
            if(td){
                if(td.innerHTML.toUpperCase().indexOf(filtrar) > -1){
                    tr[i].style.display = "";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }

    if (filtro == 'nome'){

        var ColunaNome = '2';
        var filtrar, tabela, tr, td, th, i;
        filtrar = document.querySelector('#search');
        filtrar =filtrar.value.toUpperCase();
    
        tabela = document.querySelector('#customers');
    
        tr = tabela.getElementsByTagName('tr');
        th = tabela.getElementsByTagName('th');
    
        for (i = 0; i<tr.length; i++){
    
            td = tr [i].getElementsByTagName('td')[ColunaNome];
            if(td){
                if(td.innerHTML.toUpperCase().indexOf(filtrar) > -1){
                    tr[i].style.display = "";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }

    if (filtro == 'unidade'){

        var ColunaUnidade = '3';
        var filtrar, tabela, tr, td, th, i;
        filtrar = document.querySelector('#search');
        filtrar =filtrar.value.toUpperCase();
    
        tabela = document.querySelector('#customers');
    
        tr = tabela.getElementsByTagName('tr');
        th = tabela.getElementsByTagName('th');
    
        for (i = 0; i<tr.length; i++){
    
            td = tr [i].getElementsByTagName('td')[ColunaUnidade];
            if(td){
                if(td.innerHTML.toUpperCase().indexOf(filtrar) > -1){
                    tr[i].style.display = "";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
    e.preventDefault();
}

var teste = document.getElementById('search');
var select = document.getElementById('filtro')



