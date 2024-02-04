@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Área do Fornecedor</h1>
            <p class="lead">Bem-vindo à EscolaShop, a plataforma exclusiva para compra de produtos para sua escola.</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="/app/produtos" role="button">Itens a venda</a>
            <a class="btn btn-secondary btn-lg" href="/app/produtos/novo" role="button">Adicionar Produtos</a>
            <a class="btn btn-primary btn-lg" href="/app/fornecedor/novo" role="button">Cadastrar empresa</a>




        </div>
    @endsection
