@props([
    'name',
    'label' => ucfirst($name),
    'options' => [],
    'required' => false,
    'layout' => 'horizontal',
    'selected' => null,
])

@php
    $layoutClass = $layout === 'vertical' ? 'flex-col gap-2' : 'flex-wrap gap-4';
@endphp

<div class="mb-4">
    <label class="block text-xl font-semibold text-white mb-2">{{ $label }}</label>
    <div class="flex {{ $layoutClass }}">
        @foreach ($options as $value => $display)
            <label class="flex items-center gap-2 text-white">
                <input
                    type="radio"
                    name="{{ $name }}"
                    value="{{ $value }}"
                    x-model="role"
                    class="accent-primary"
                    @checked(old($name, $selected) === $value)
                    @if($required) required @endif
                >
                {{ $display }}
            </label>
        @endforeach
    </div>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
