@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('servers.index') }}">Server list</a></li>
        </ol>
    </nav>

    <h1>Server {{ $server->name }}</h1>

    <div>
        <div>IP: {{ $server->ip }}</div>
    </div>

    <div class = mt-2>
        <a href = "{{ route('servers.edit', $server) }}"
            class = 'btn btn-secondary'>Edit a server</a>
        <form action = {{ route('servers.destroy', $server) }} method="POST" class = 'mt-2'>
            @method('delete')
            @csrf
            <input type = "submit" class = 'btn btn-danger' value = "Delete">
        </form>

    </div>
@endsection
