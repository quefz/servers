@extends('layouts.app')

@section('content')
    <a href = "{{ route('servers.index') }}">Server list</a>
    <form action = "{{ route('servers.update', $server) }}" method = "POST">
        @method('put')
        @csrf
        <h1>Edit a server {{ $server->name }}</h1>

        @if ($errors->any())
            <div>
                <url>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </url>
            </div>
        @endif

        <div class = 'form-group'>
            <label for = 'name'>Name</label>
            <input class = 'form-control' id = 'name' name = 'name'
                value = "{{ old('name') ?: $server->name }}" required>
        </div>

        <div>
            <label for = 'ip'>IP</label>
            <input class = 'form-control' id = 'ip' name = 'ip'
                value = "{{ old('ip') }}" disabled>
        </div>

        <div class = 'mt-2'>
            <input type = "submit" class = 'btn btn-success' value = "Save">
        </div>
    </form>
@endsection
