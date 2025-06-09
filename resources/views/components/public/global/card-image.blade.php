@props([
    'title',
    'subtitle',
    'image',
    'buttonText' => null,
    'buttonUrl' => null,
    'reverse' => false,
])

@php
    $layoutClass = $reverse ? 'md:flex-row-reverse' : 'md:flex-row';
@endphp

<section class="flex flex-col {{ $layoutClass }} gap-8 items-center my-12">
    <div class="card flex-1 space-y-4">
        <h2 class="heading-h2">{{ $title }}</h2>
        <p class="subheading">{{ $subtitle }}</p>
        <div class="body-text prose prose-invert max-w-none">
            {{ $slot }}
        </div>

        @if ($buttonUrl && $buttonText)
            <x-public.button :href="$buttonUrl" class="min-w-[200px]">
                {{ $buttonText }}
            </x-public.button>
        @endif
    </div>

    <div class="card-image flex-2">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="rounded-[30px]">
    </div>
</section>

