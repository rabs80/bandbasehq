@php
    $routeName = request()->route()->getName();
    $folder = $routeName && File::exists(public_path("images/$routeName")) ? $routeName : 'default';
    $endpoint = url("/carousel-data/$folder");
@endphp

<section
    x-data="carousel"
    x-init="init('{{ $endpoint }}')"
    class="relative w-full overflow-hidden rounded-[30px] h-[308px]"
>
    <template x-if="images.length">
        <img
            :src="images[currentIndex]"
            alt="Hero Banner"
            class="absolute inset-0 w-full h-full object-cover rounded-[30px] transition-opacity duration-1000 ease-in-out"
            :class="{ 'opacity-0': fade, 'opacity-100': !fade }"
        >
    </template>

    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-6 z-10 rounded-[30px]">
        <h1 x-text="captions[currentIndex]?.title || ''"
            class="text-4xl md:text-5xl font-bold drop-shadow-lg mb-4 transition-opacity duration-1000 ease-in-out"
            :class="{ 'opacity-0': fade, 'opacity-100': !fade }"
        ></h1>
        <p x-text="captions[currentIndex]?.subtitle || ''"
            class="text-lg md:text-xl drop-shadow-md transition-opacity duration-1000 ease-in-out"
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
            this.cycleInterval = setInterval(() => {
                this.fade = true;
                setTimeout(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    this.fade = false;
                }, 1000);
            }, 7000);
        }
    }));
});
</script>
