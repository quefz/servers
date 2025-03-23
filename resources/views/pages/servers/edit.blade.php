@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('servers.index') }}">Server list</a></li>
          <li class="breadcrumb-item"><a href="{{ route('servers.show', $server) }}">{{ $server->name }}</a></li>
        </ol>
    </nav>

    <form action = "{{ route('servers.update', $server) }}" method = "POST">
        @method('put')
        @csrf
        <h1>Edit a server {{ $server->name }}</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Name',
            'value' => $server->name,
        ])

        @include('components.form.fields.input', [
            'name' => 'ip',
            'label' => 'IP',
            'value' => $server->ip,
            'disabled' => true,
        ])

        <div class = 'mt-2'>
            <input type = "submit" class = 'btn btn-success' value = "Save">
        </div>
    </form>
@endsection
