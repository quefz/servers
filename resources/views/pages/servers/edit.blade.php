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

        <div>
            <div>
                <label for = "name">Name</label>
            </div>
            <div>
                @dump(old('name'))
                @dump($server->name)
                <input id = "name" name = "name" value = "{{ old('name') ?
                                    old('name') : $server->name }}" required>
            </div>
        </div>

        <div>
            <div>
                <label for = "ip">IP</label>
            </div>
            <div>
                <input id = "ip" name = "ip" value = "{{ $server->ip }}" disabled>
            </div>
        </div>
        <input type = "submit" value = "Save">
    </form>
@endsection
