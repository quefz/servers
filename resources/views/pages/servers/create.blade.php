@extends('layouts.app')

@section('content')
    <a href = "{{ route('servers.index') }}" class = 'btn btn-info'>Server list</a>
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
