@extends('layouts.adm')
@section('content')

<h2> Produtos </h2>
<div class="d-flex mb-2 justify-content-end">
    <a href="{{route('produtos.create')}}" class="btn btn-success right"> Criar Produtos</a>
</div>


<div>
    <ul class="list-group">
        @foreach($produtos as $produto)
        <li class="list-group-item">
            <span>{{$produto->name}}</span>
            <img src="{{asset('storage/'.$produto->image)}}" alt="" width="40" height="40">
            <span>{{$produto->amount}}</span>
        </li>
        @endforeach
    </ul>
</div>


@endsection
