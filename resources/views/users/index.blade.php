@extends('layouts.adm')
@section('content')
<h2> Lista de usuarios </h2>

<ul class="list-group">
    @foreach($users as $user)
    @if($user->id != auth()->user()->id)
    <li class="list-group-item">
        <span>{{$user->name}}</span>
        <form action="{{route ('usuarios.changeadmin' , $user->id) }}" class="d-inline" method="POST"
            onsubmit="return confirm('voce tem certeza que quer atualizar para Admin')">
            @csrf
            @method('PUT')
<button type="submit" class="btn btn-sm float-right ml-1 {{$user->isAdmin() ? 'btn-danger' : 'btn-primary'}}">
                {{$user->isAdmin() ? 'Remover Admin' : 'Adicionar Admin'}}
            </button>
        </form>
    </li>
    @endif
    @endforeach
</ul>
@endsection
