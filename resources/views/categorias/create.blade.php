@extends('layouts.adm')
@section('content')
<form method="POST" action="{{route('categorias.store')}}">
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
            <input type="text" class="form-control" placeholder="Nome Categoria" name="name" value="{{old('name')}}">
        </div>
    </div>

    <button type="submit" class="btn-primary"> Cadastrar</button>
</form>
@endsection
