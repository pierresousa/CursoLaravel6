@extends('admin.layouts.app')

@section('title','Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar produto</h1>
    
    @include('admin.includes.alerts')

    <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
        @include('admin.pages.products._partials.forms')
        <button class="btn btn-success" type="submit">Criar</button>
    </form>

@endsection