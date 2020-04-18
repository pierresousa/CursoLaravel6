@csrf

<input class="form-control" type="text" name="name" placeholder="Nome" value="{{ $product->name ?? '' }}">
<br>
<input class="form-control" type="text" name="price" placeholder="Preço" value="{{ $product->price ?? '' }}">
<br>
<input class="form-control" type="text" name="description" placeholder="Descrição" value="{{ $product->description ?? '' }}">
<br>
<input class="form-control-file" type="file" name="image">

<br>
