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

        <div class = 'form-group'>
            <label for = 'name'>Name</label>
            <input class = 'form-control' id = 'name' name = 'name' value = "{{ old('name') }}" required>
        </div>

        <div>
            <label for = 'ip'>IP</label>
            <input class = 'form-control' id = 'ip' name = 'ip' value = "{{ old('ip') }}" required>
        </div>

        <div class = 'mt-2'>
            <input type = "submit"  class = 'btn btn-success' value = "Add">
        </div>
    </form>
@endsection
