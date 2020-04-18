@extends('admin.layouts.app')

@section('title','Editar Produto')

@section('content')
    <h1>Editar produto</h1>

    @include('admin.includes.alerts')

    <form action="{{ route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.pages.products._partials.forms')
        <button class="btn btn-success" type="submit">Editar</button>
    </form>

@endsection