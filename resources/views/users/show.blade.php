@extends('layouts.app')

@section('title', 'Dados do usuário')

@section('content')
    <h1>Dados do usuário {{$user->name}}</h1>

    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection