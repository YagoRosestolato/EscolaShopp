@extends('layouts.app', ['current' => 'fornecedor'])

@section('content')
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">
        <div style="text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; max-width: 400px;">
            <h2>Cadastro de Empresas</h2>
            <form action="{{ route('fornecedor.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nome">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="cnpj" class="form-control" placeholder="CNPJ">
                    @error('cnpj')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                    @error('endereco')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
