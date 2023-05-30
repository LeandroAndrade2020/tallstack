@props([
    'label',
    'name',
])

<label for="{{ $attributes->get('id')}}" class="label">{{ $label }}</label>
<div class="mt-2">
    <input {{ $attributes->class(['input']) }}/>
</div>
@error($attributes->wire('model')->value()) <span class="text-red-500">{{ $message }}</span>@enderror

