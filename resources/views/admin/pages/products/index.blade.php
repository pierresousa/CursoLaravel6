@extends('admin.layouts.app')
@section('titulo','Gestão de produtos')

@section('content')
    
    <h1>Produtos</h1>
    <hr>
    <a class="btn btn-primary" href="{{ route('products.create')}}">Adicionar</a>
    <br>
    <br>
    
    <form method="POST" action="{{ route('products.search') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputBusca">Buscar produtos</label>
        <input type="text" class="form-control" id="exampleInputBusca" name="filter" value=" {{ $filters['filter'] ?? ''}}">
          
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </form>

    <br>


    @isset($products)
        @if ($products->total()!=0)
            <table class="table table-striped">
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Opção</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            @if ($product->image)
                                <img style="max-width: 100px;" class="img-thumbnail" src="{{ url("storage/$product->image") }}" alt="{{ $product->name }}" >
                            @else

                            @endif
                        </td>
                        <td>{{ $product->name ?? ''}}</td> 
                        <td>{{ $product->price ?? ''}}</td>
                        <td>
                            
                            <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('products.show', $product->id) }}">Detalhes </a>
                                <a href="{{ route('products.edit', $product->id) }}">Editar </a>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>            
                    </tr>
                
                @endforeach
                
            </table>
            @if (isset($filters))
                {!! $products->appends($filters)->links() !!}
            @else
                {!! $products->links() !!}
            @endif
        @else
            <p>Não há resultados para busca</p>
        @endif
        
    @else 
        <p>Não há produtos</p>
    @endisset
    
@endsection
