@extends('layouts.adm')
@section('content')

<h2> Lista de categorias</h2>
<div class="d-flex mb-2 justify-content-end">
    <a href="{{route('categorias.create')}}" class="btn btn-success right"> Criar Categorias</a>
</div>

<div>
    <ul class="list-group">
        @foreach($categorias as $categoria)
        <li class="list-group-item">
            <span>{{$categoria->name}}</span>
            <a href="{{route('categorias.edit' , $categoria->id)}}" class="btn btn-primary btn-sm float-right ml-1"> Editar</a>
            <a href="" class="btn btn-primary btn-sm float-right ml-1"> Excluir</a>
        </li>
        @endforeach
    </ul>
</div>

@endsection
