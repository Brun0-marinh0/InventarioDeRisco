@extends('layouts.main')

@section('title', 'configuração')

@section('content')

<h1>Configurações</h1>
<h2 class="subTitle-green">Acrescentar e Visualizar</h2>
<div class="container__config">
    <div class="config">
        <a href="/config/risco">
            <div class="config__title">
                <h2>Grupo de risco</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/config/menu-origem">
            <div class="config__title">
                <h2>Origem do perigo</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/">
            <div class="config__title">
                <h2>Localização do risco mais significativo</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/">
            <div class="config__title">
                <h2>indivíduos suscetíveis</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/">
            <div class="config__title">
                <h2>atividade</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/">
            <div class="config__title">
                <h2>Causas básicas</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div>
    <div class="config">
        <a href="/">
            <div class="config__title">
                <h2>Consequências potenciais</h2>
            </div>
            <div class="config__icon">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
    </div
</div>
@endsection