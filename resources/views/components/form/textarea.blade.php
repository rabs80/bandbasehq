@props([
    'name',
    'label' => ucfirst($name),
    'required' => false,
])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-semibold text-white mb-1">{{ $label }}</label>
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="4"
        @if($required) required @endif
        {{ $attributes->merge(['class' => 'w-full bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto border border-border-subtle focus:outline-none focus:ring-2 focus:ring-primary']) }}
    >{{ old($name) }}</textarea>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
