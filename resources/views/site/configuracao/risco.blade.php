@extends('layouts.main')
@section('title', 'configuração - Grupo de riscos')
@section('content')
                        <h1>Configurações</h1>
                        <h2 class="subTitle-green">Grupo de Risco</h2>
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Grupo de Risco</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @forelse ($riscos as $risco)
                                    <tr>
                                        <td>{{ $risco->id}}</td>
                                        <td>{{ $risco->grupo_de_risco }}</td>
                                        <td id="acoes">
                                            <div class="btn-table">
                                                <a href="#" class="btn-info edit-btn">Consultar</a>
                                                <form action="/config/risco/{{ $risco->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i> Excluir</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr> 
                                @empty
                                    <td>Vazio</td>
                                    <td>Nenhum registro cadastrado</td>
                                @endforelse
                            </tbody>

                        </table>
                        <script src="/script/main.js"></script>
@endsection