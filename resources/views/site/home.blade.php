<?php  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário de risco</title>
    <link rel="stylesheet" href="/css/home.css" rel="stylesheets">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="ilustracao"></div>

        <div class="box">
            <nav>
                <h2>
                    Inventário de Risco
                </h2>
                <ul>
                    <li><a  class="link-nav" href="{{ route('site.config') }}"><i id="ferramenta" class="fas fa-wrench"></i> Configurações</a></li>
                    
                    <li><a class="link-nav" href="#"><i id="sair" class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </nav>
            <div class="home">
                <h3>Procurar Máquina</h3>
                        <select id="filtro" name="filtro" name="filtro" class="filtro">
                            <option value="">FILTRAR POR:</option>
                            <option value="tipo">TIPO</option>
                            <option value="nome">NOME</option>
                            <option value="unidade">UNIDADE</option>
                        </select>
                <div class="campos">
                    <form action="/home" method="GET" class="pesquisa">
                    
                        <input type="text" id="search" name="search" placeholder="Digite aqui">
                        <button type="submit" id="pesquisar-btn" name="pesquisar-btn">Pesquisar</button>
                    </form>
                    <button id="nova">Adicionar Nova +</button>
                </div>
                    <div class="tabela">
                            <?php
                                if($_SESSION['msg']){
                                    echo $_SESSION['msg'];
                                    $_SESSION['msg']='';
                                }
                            ?>
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TIPO</th>
                                    <th>MÁQUINA</th>
                                    <th>UNIDADE</th>
                                    <th>FABRICANTE</th>
                                    <th>MODELO</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @forelse ($maquinas as $maquina)
                                    <tr>
                                        <td>{{ $maquina->id}}</td>
                                        <td>{{ $maquina->tipo }}</td>
                                        <td>{{ $maquina->nome_da_maquina }}</td>
                                        <td>{{ $maquina->unidade }}</td>
                                        <td>{{ $maquina->fabricante }}</td>
                                        <td>{{ $maquina->modelo }}</td>
                                        <td id="acoes">
                                            <div class="btn-table">
                                                <a href="{{ route('site.inventario') }}" class="btn-info edit-btn">Consultar</a>
                                                <button onclick="iniciarModal('{{$maquina->id}}')" id="{{$maquina->id}}" class="delete-btn"><i class="fas fa-trash-alt"></i> Excluir</button>
                                            </div>
                                        </td>
                                    </tr> 
                                @empty
                                    <td>Vazio</td>
                                    <td>Nenhum registro cadastrado</td>
                                    <td>Vazio</td>   
                                    <td>Vazio</td>
                                    <td>Vazio</td>
                                    <td>Vazio</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

        <!--Aqui se INICIA o pop up de cadastro de nova máquina-->

        <div id="modal-form" class="modal-container">
            <div class="modal">
                <form action="{{ route('site.store') }}" method="POST">
                    @csrf
                    <div class="caixa">
                         <h1>Cadastro de nova máquina</h1>
                        <label for="">Unidade:</label>
                        <select id="unidade" name="unidade" name="unidade">
                            <option value="matriz">MATRIZ</option>
                            <option value="filial">FILIAL</option>
                        </select>
                        <label for=""><br><br>Tipo:</label>
                        <input required id="tipo" name="tipo" class="input-cadastro" type="text">
                        <label for="">Nome da máquina:</label>
                        <input required id="nome_da_maquina" name="nome_da_maquina" class="input-cadastro" type="text">
                        <label for="">Fabricante:</label>
                        <input required id="fabricante" name="fabricante" class="input-cadastro" type="text">
                        <label for="">Modelo:</label>
                        <input required id="modelo" name="modelo" class="input-cadastro" type="text">
                        <div class="buttons">
                            <button type="submit" class="buttons-btn" id="salvar">Salvar</button>
                            <button class="buttons-btn" id="cancelar">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!--Aqui TERMINA o pop up de cadastro de nova máquina-->
    </div>
    <div id="confirm-modal" class="confirm-modal">
        <div class="modal-confirm-caixa">
                <p id="p-h4">Excluir Máquina</p>
                <div class="linha"></div>
                <p>Tem certeza de que deseja excluir?</p>
                <div class="linha"></div>
                <div class="btnConf">
                    <button id="false-destroy" type="submit" value="nao">Não</button>
                    <form action="/maquinas/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" id="InputId" name="InputId" value="">
                    <button id="true-destroy"  type="submit">Excluir</button>
                    </form>
                </div>
        </div>
    </div>
        <script src="/script/home.js"></script>
</body>
</html>