@props(['name', 'type' => 'text', 'placeholder' => '', 'label' => ''])

<div>
    <input type="{{ $type }}" id="{{ $name }}" class="form-control" wire:model="{{ $name }}"  wire:keydown.escape="teste"/>
    <label class="form-label" for="{{ $name }}">{{ empty($label) ? $name : $label }}</label>
    @error($name)
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
