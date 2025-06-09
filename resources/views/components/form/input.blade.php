@props([
    'name',
    'label' => ucfirst($name),
    'type' => 'text',
    'required' => false,
])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-semibold text-white mb-1">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        @if($required) required @endif
        {{ $attributes->merge(['class' => 'w-full bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto border border-border-subtle focus:outline-none focus:ring-2 focus:ring-primary']) }}
    >
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
