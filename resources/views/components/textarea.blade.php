@props(['disabled' => false,'type' => ''  ,'field' => '', 'value' => ''])

<div class="">
    {{-- <label>{{ $label }}</label> --}}
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>{{ $value }}</textarea>
</div>

@error($field)
    <div class="">{{ $message }}</div>
@enderror
