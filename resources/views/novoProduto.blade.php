@extends('layouts.app', ['current' => 'produtos'])

@section('content')
<div>
    <h1>Criar novo produto</h1>
    <form action="{{ route('produtos.store') }}" method="post">

        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="" placeholder="Nome">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control" value="" placeholder="Descrição">
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="number" name="price" class="form-control" value="" placeholder="Preço">
            @error('price')
                <span>{{ $message }}</span>
            @enderror
        </div>
         <button type="submit" class="btn btn-primary">Cadastrar</button>  
        <a href="{{ url('/app/produtos') }}" class="btn btn-info">Listar Produtos</a>
    </form>
</div>
@endsection
