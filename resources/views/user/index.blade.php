@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
<div>
    <h1>Usuários</h1>
    <div class="text-end">
        <a href="logout" class="btn btn-danger btn-sm">
            logout
        </a>
        <a href="users/create" class="btn btn-primary btn-sm">
            novo usuário
        </a>
    </div>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-end">
                <a href="user/{{ $user->id }}" class="btn btn-primary btn-sm">
                    detalhes
                </a>
                <form action="user/{{ $user->id }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm mt-1">excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
