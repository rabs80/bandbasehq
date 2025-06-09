@props([
    'title',
    'features' => [],
    'buttonUrl' => '#',
    'buttonText' => 'Learn More',
])

<div class="bg-surface-card rounded-[30px] p-8 border border-border-subtle flex flex-col gap-6 text-left">
    <h2 class="subheading text-center">{{ $title }}</h2>

    <ul class="list-disc list-inside body-text leading-relaxed space-y-1">
        @foreach ($features as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <div class="text-center">
        <x-public.button :href="$buttonUrl">
            {{ $buttonText }}
        </x-public.button>
    </div>
</div>
