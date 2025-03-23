@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('servers.index') }}">Server list</a></li>
        </ol>
    </nav>

    <form action = "{{ route('servers.store') }}" method = "POST">
        @csrf
        <h1>Add a new server</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Name',
            'value' => '',
        ])

        @include('components.form.fields.input', [
            'name' => 'ip',
            'label' => 'IP',
            'value' => '',
        ])

        <div class = 'mt-2'>
            <input type = "submit"  class = 'btn btn-success' value = "Add">
        </div>
    </form>
@endsection
