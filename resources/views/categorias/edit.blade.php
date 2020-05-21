@extends('layouts.adm')
@section('content')
<form action="{{route('categorias.update' , $categoria->id)}}" method="POST">
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
    @method('PUT')
    <div class="form-group">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome Categoria" name="name"
                value="{{$categoria->name}}">
        </div>
    </div>

    <button type="submit" class="btn-primary"> Editar Categoria</button>
</form>
@endsection
