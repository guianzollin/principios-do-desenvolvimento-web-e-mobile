@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
<div>
    <h1>Detalhes do usuário</h1>
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $user->email }}</h6>
            <p class="card-text">Criado em {{ $user->created_at }}</p>
            <a href="/users" class="card-link">Voltar</a>
        </div>
    </div>
</div>
@endsection