@props(['href' => null])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center gap-3 px-6 py-4 rounded-[16px] bg-[#00BCD4] text-white font-medium text-base hover:bg-[#00aabb] transition-colors duration-300'
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center gap-3 px-6 py-4 rounded-[16px] bg-[#00BCD4] text-white font-medium text-base hover:bg-[#00aabb] transition-colors duration-300'
    ]) }}>
        {{ $slot }}
    </button>
@endif
