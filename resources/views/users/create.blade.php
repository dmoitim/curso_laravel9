@extends('layouts.app')

@section('title', 'Criação de usuário')

@section('content')
    <h1>Criação de usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users._partials.form')
    </form>
@endsection