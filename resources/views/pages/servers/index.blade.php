@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Server list</li>
        </ol>
    </nav>

    <a href = "{{ route('servers.create') }}" class = 'btn btn-success'>Add server</a>
    <table class = 'table'>
        <thead>
            <tr>
                <th scope = 'col'>Id</th>
                <th scope = 'col'>Name</th>
                <th scope = 'col'>IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servers as $server)
                <tr>
                    <td>{{ $server->id }}</td>
                    <td>
                        <a href = "{{ route('servers.show', $server) }}"
                            class = 'btn btn-primary btn-sm'>{{ $server->name }}</a>
                    </td>
                    <td>{{ $server->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
