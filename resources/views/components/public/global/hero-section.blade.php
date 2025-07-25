@php
    $routeName = request()->route()->getName();
    $folder = $routeName && File::exists(public_path("images/carousel/$routeName")) ? $routeName : 'default';
    $endpoint = url("/carousel-data/$folder");
@endphp

<section
    x-data="carousel"
    x-init="init('{{ $endpoint }}')"
    class="relative w-full overflow-hidden rounded-[30px] h-[308px]"
>
    <!-- Logo Overlay -->
    <div class="absolute inset-0 flex justify-center items-center pointer-events-none z-0">
        <img src="{{ asset('images/BandBaseHQ-Logo-Transparent.png') }}"
             alt="BandBaseHQ Logo"
             class="opacity-50 w-[40%] max-w-[300px] select-none" />
    </div>

    <!-- Image Carousel -->
    <template x-if="images.length">
        <div class="absolute inset-0 w-full h-full rounded-[30px] overflow-hidden z-10">
            <img
                :key="currentIndex"
                :src="images[currentIndex]"
                alt="Hero Banner"
                class="w-full h-full object-cover transition-opacity duration-[3000ms] ease-in-out rounded-[30px]"
                :class="{ 'opacity-0': fade, 'opacity-100': !fade }"
            />

        </div>
    </template>

    <!-- Text Overlay -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-6 z-20 rounded-[30px]">
        <h1
            x-text="captions[currentIndex]?.title || ''"
            class="text-4xl md:text-5xl font-bold text-white drop-shadow-[0_2px_6px_rgba(0,0,0,0.9)] mb-4 transition-opacity duration-[3000ms] ease-in-out"
            :class="{ 'opacity-0': fade, 'opacity-100': !fade }"
        ></h1>

        <p
            x-text="captions[currentIndex]?.subtitle || ''"
            class="text-lg md:text-xl text-white drop-shadow-[0_1px_3px_rgba(0,0,0,0.75)] transition-opacity duration-[3000ms] ease-in-out"
            :class="{ 'opacity-0': fade, 'opacity-100': !fade }"
        ></p>
    </div>
</section>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('carousel', () => ({
        images: [],
        captions: [],
        currentIndex: 0,
        fade: false,
        cycleInterval: null,

        init(url) {
            fetch(url)
                .then(res => res.json())
                .then(data => {
                    this.images = data.images;
                    this.captions = data.captions;
                    this.startCycle();
                });
        },

        startCycle() {
            if (this.cycleInterval) clearInterval(this.cycleInterval);

            this.cycleInterval = setInterval(() => {
                this.fade = true;

                // Complete fade in
                setTimeout(() => {
                    this.fade = false;
                }, 3000); // Match transition duration
            }, 9000); // 3s fade out + 3s fade in + 3s display time
        }

    }));
});
</script>
