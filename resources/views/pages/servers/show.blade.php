@extends('layouts.app')

@section('content')
    <div class="btn-group-vertical">
        <a href = "{{ route('servers.index') }}"
            class = 'btn btn-info'>Server list</a></li>
        <a href = "{{ route('servers.edit', $server) }}"
            class = 'btn btn-secondary'>Edit a server</a></li>
    </div>
    <h1>Server {{ $server->name }}</h1>
    <div>
        <div>IP: {{ $server->ip }}</div>
    </div>
    <div>
        <form action = {{ route('servers.destroy', $server) }} method="POST">
            @method('delete')
            @csrf
            <input type = "submit" class = 'btn btn-danger' value = "Delete">
        </form>
    </div>
@endsection
