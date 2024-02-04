@extends('layouts.app', ['current' => 'produtos'])

@section('content')



<div>
    <h1>Editar produto</h1>
    <form action="/app/produtos/{{ $prod->id }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ $prod->name }}" placeholder="Nome">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control" value="{{ $prod->description }}"
                placeholder="Descrição">
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="number" name="price" class="form-control" value="{{ $prod->price }}" placeholder="Preço">
            @error('price')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/app/produtos" class="btn btn-info">Listar Produtos</a>
    </form>
</div>

@endsection



