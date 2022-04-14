@extends('layouts.app')

@section('title', 'Dados do usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Dados do usuário {{$user->name}}</h1>

    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="py-12">
        @csrf
        @method('DELETE')
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
    </form>
@endsection