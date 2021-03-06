@extends('layouts.app')

@section('title', 'Criação de usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Criação de usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('users._partials.form')
    </form>
@endsection