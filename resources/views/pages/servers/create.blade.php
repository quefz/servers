@extends('layouts.app')

@section('content')
    <a href = "{{ route('servers.index') }}">Server list</a>
    <form action = "{{ route('servers.store') }}" method = "POST">
        @csrf
        <h1>Add a new server</h1>

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
                <input id = "name" name = "name" value = "{{ old('name') }}" required>
            </div>
        </div>

        <div>
            <div>
                <label for = "ip">IP</label>
            </div>
            <div>
                <input id = "ip" name = "ip" value = "{{ old('ip') }}" required>
            </div>
        </div>
        <input type = "submit" value = "Add">
    </form>
@endsection
