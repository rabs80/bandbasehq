@props(['title'])

<div x-data="{ open: false }" class="border border-border-subtle rounded-2xl overflow-hidden w-full">
    <button
        @click="open = !open"
        class="w-full text-left px-6 py-4 bg-surface-card hover:bg-surface-light transition flex justify-between items-center"
    >
        <span class="subheading">{{ $title }}</span>
        <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div x-show="open" x-collapse class="body-text px-6 py-4 bg-surface prose max-w-none">
        {{ $slot }}
    </div>
</div>
