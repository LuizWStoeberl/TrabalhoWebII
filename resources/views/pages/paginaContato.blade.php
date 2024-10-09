@extends('layouts.master')

@section('title', 'contatos')

@section('content')
    <h1> Contatos </h1>
    <form action="{{ route('contato.store') }}" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

         <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="submit" > Salvar </button>
    </form>
    

@endsection