<footer class="max-w-screen-xl mx-auto rounded-[30px] border border-border-subtle px-6 py-4">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">

        {{-- Left: Footer Nav --}}
        <x-public.footer.footer-nav />

       <div class="flex justify-center gap-40 md:flex-1 order-3 md:order-none">
            <a href="https://facebook.com" target="_blank" aria-label="Facebook"
            class="text-primary hover:text-primary/80 transition">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M22 12.07C22 6.49 17.52 2 12 2S2 6.49 2 12.07c0 5.05 3.66 9.24 8.44 9.93v-7.03H8.08v-2.9h2.36V9.41c0-2.33 1.39-3.63 3.52-3.63.7 0 1.43.12 1.43.12v1.57h-.8c-.78 0-1.02.48-1.02.97v1.17h2.2l-.35 2.9h-1.85v7.03C18.34 21.31 22 17.12 22 12.07z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" aria-label="Instagram"
            class="text-primary hover:text-primary/80 transition">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M7.75 2h8.5C19.55 2 22 4.45 22 7.75v8.5c0 3.3-2.45 5.75-5.75 5.75h-8.5C4.45 22 2 19.55 2 16.25v-8.5C2 4.45 4.45 2 7.75 2zm0 2C5.68 4 4 5.68 4 7.75v8.5C4 18.32 5.68 20 7.75 20h8.5c2.07 0 3.75-1.68 3.75-3.75v-8.5C20 5.68 18.32 4 16.25 4h-8.5zm4.25 3.5a4.25 4.25 0 110 8.5 4.25 4.25 0 010-8.5zm0 2a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm5.25-.5a.75.75 0 110 1.5.75.75 0 010-1.5z"/>
                </svg>
            </a>
            <a href="https://twitter.com" target="_blank" aria-label="X / Twitter"
            class="text-primary hover:text-primary/80 transition">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M21.5 2h-3l-5.88 7.14L6.43 2H2.5l7.65 10.28L2 22h3l6.17-7.48L17.67 22h3l-8.3-11.17L21.5 2z"/>
                </svg>
            </a>
        </div>


        {{-- Right: Logo and copyright --}}
        <div class="flex flex-col items-center gap-2">
            <img src="{{ asset('images/logo-transparent-sml.png') }}" class="h-20 w-auto" alt="BandBaseHQ Logo">
            <span class="caption">© 2025 BandBaseHQ</span>
        </div>
    </div>
</footer>
