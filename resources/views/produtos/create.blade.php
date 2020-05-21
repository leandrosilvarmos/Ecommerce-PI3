@extends('layouts.adm')
@section('content')
<form method="POST" action="{{route('produtos.store')}}" class="bg-white p-3" enctype="multipart/form-data">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group text-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <div class="form-group">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome Produto" name="name">
        </div>

        <div class="col">
            <input type="file" class="form-control" placeholder="Imagem" name="image">
        </div>


        <div class="col">
            <input type="text" class="form-control" placeholder="Descrição" name="description">
        </div>


        <div class="col">
            <input type="text" class="form-control" placeholder="Preço" name="price">
        </div>


        <div class="col">
            <input type="text" class="form-control" placeholder="Desconto" name="discount">
        </div>


        <div class="col">
            <input type="text" class="form-control" placeholder="Quantidade" name="amount">
        </div>

        <div class="col">
            <select name="category_id" id="">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
        </div>


    </div>

    <button type="submit" class="btn-primary"> Cadastrar</button>
</form>
@endsection
