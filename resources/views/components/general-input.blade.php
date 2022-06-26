@props(['disabled' => false, 'field' => '', 'label' => ''])

<label>{{ $label }}</label>
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>
@error($field)
    <div class="">{{ $message }}</div>
@enderror