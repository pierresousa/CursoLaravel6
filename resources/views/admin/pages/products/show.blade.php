@extends('admin.layouts.app')

@section('title','Produto')

@section('content')
    <h1>Produto</h1>
    <h2>Nome: {{ $product->name ?? ''}}</h2>
    <h2>Preço: {{ $product->price ?? ''}}</h2>
    <h2>Descrição: {{ $product->description ?? ''}}</h2>

    <form action="{{ route('products.destroy', $product->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
@endsection