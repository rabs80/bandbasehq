<section class="flex flex-col md:flex-row gap-8">
    <div class="card flex-1 space-y-8">
        <h1 class="heading-h1">Band Base HQ</h1>
        <p class="subheading">Designed by musicians, for musicians</p>
        <p class="body-text">
            Your all-in-one toolkit for managing everything behind the scenes and on stage.
            Whether you're a solo act or a full band, we streamline gig planning, tour logistics, marketing campaigns,
            and more — so you can focus on the music!
        </p>
        <x-public.button :href="url()->to(route('about'))" class="min-w-[200px]">About</x-public.button>
    </div>
    <div class="card-image flex-2">
        <img src="{{ asset('images/home-about.png') }}" class="rounded-[30px]">
    </div>
</section>
