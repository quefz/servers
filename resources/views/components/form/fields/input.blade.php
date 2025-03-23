@php
   if(!isset($disabled)) {
        $disabled = false;
   }
@endphp

<div class = 'form-group'>
    <label for = '{{ $name }}'> {{ $label }}</label>
    <input
        class = 'form-control'
        id = '{{ $name }}'
        name = '{{ $name }}'
        value = "{{ old($name) ?: $value }}"
        required
        {{ (isset($disabled) && $disabled) ? 'disabled' : ''}}
    >
</div>
