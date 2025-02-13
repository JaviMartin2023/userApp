@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Usuarios</h1>
    @if (Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin')
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        @if (Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin' || Auth::id() === $user->id)
                            @if ($user->id !== 1)
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>   
                            @endif         
                        @endif
                 
                        @if ((Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin') && $user->role !== 'superadmin')
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection