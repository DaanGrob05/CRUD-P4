@props(['disabled' => false,'type' => ''  ,'field' => '', 'label' => ''])

<div class="">
    <label>{{ $label }}</label>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>
    @error($field)
        <div class="">{{ $message }}</div>
    @enderror
</div>