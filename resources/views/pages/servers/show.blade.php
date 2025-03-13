@extends('layouts.app')

@section('content')
    <div>
        <list>
            <li><a href = "{{ route('servers.index') }}">Server list</a></li>
            <li><a href = {{ route('servers.edit', $server) }}>Edit a server</a></li>
        </list>
        <form action = {{ route('servers.destroy', $server) }} method="POST">
            @method('delete')
            @csrf
            <input type = "submit" value = "Delete">
        </form>
    </div>
    <h1>Server {{ $server->name }}</h1>
    <div>
        <div>IP: {{ $server->ip }}</div>
    </div>
@endsection
