@extends('layouts.app')

@section('content')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Fornecedor</h5>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Endereço</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedor as $fornecedor)
                        <tr>
                            <td>{{ $fornecedor->id }}</td>
                            <td>{{ $fornecedor->name }}</td>
                            <td>{{ $fornecedor->cnpj }}</td>
                            <td>{{ $fornecedor->endereco }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                <a href="/app/diretor" class="btn btn-primary mb-2">Voltar</a><br>
            </div>
        </div>
    </div>
@endsection
