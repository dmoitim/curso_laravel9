@extends('layouts.app')

@section('title', 'Edição de usuário')

@section('content')
    <h1>Edição do usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection