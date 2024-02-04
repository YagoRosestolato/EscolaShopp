@extends('layouts.app')

@section('content')
<style>
    .produto-item {
        cursor: pointer;
    }

    .produto-item.riscado {
        text-decoration: line-through;
    }
</style>


<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Área do Diretor</h1>
        <p class="lead">Bem-vindo à EscolaShop, a plataforma exclusiva para compra de produtos para sua escola.</p>
        <hr class="my-4">
        <p>Aqui você pode gerenciar produtos e fornecedores da escola.</p>
        <a class="btn btn-primary btn-lg" href="/app/produtos/novo" role="button">Adicionar Produtos</a>
        <a class="btn btn-secondary btn-lg" href="/app/produtos" role="button">Listar Produtos</a>
        <a class="btn btn-secondary btn-lg" href="/app/lista-fornecedor" role="button">Gerenciar Fornecedores</a>

    </div>
    <h5 class="card-title">Lista de Produtos</h5>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($produto as $produto)
                <tr class="produto-item" onclick="destacarProduto(this)">
                    <td>{{ $produto->name }}</td>
                    <td>{{ $produto->description }}</td>
                    <td>R$ {{ number_format($produto->price, 2, ',', '.') }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function destacarProduto(element) {
        $(element).toggleClass('riscado');

         $(element).find('input[type="checkbox"]').prop('checked', function(_, checked) { return !checked; });
    }
</script>
@endsection
