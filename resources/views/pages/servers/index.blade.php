@extends('layouts.app')

@section('content')
    <a href = "{{ route('servers.create') }}">Add server</a>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>IP</td>
            </tr>
        </thead>
        <tbody>
            @foreach($servers as $server)
                <tr>
                    <td>{{ $server->id }}</td>
                    <td>
                        <a href = "{{ route('servers.show', $server) }}">{{ $server->name }}</a>
                    </td>
                    <td>{{ $server->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
