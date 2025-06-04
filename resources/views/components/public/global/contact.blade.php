<section class="flex justify-center items-center gap-6">
    <div class="max-w-screen-xl w-full rounded-[30px] flex flex-row items-center bg-surface-form border border-border-subtle">
        <img src="{{ asset('images/performer-lhs.jpg') }}" alt="Performer Left" class="rounded-[30px] w-[350px] h-[350px] object-cover">

        <div class="form">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="flex flex-col form-elements">
                    <input id="name" name="name" type="text" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Name" />
                </div>

                <div class="flex flex-col form-elements">
                    <input id="email" name="email" type="email" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Email" />
                </div>

                <div class="flex flex-col form-elements">
                    <textarea id="message" name="message" rows="4" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Message"></textarea>
                </div>
            </form>

            <x-public.button type="submit" form="contact-form">
                Send
            </x-public.button>
        </div>

        <img src="{{ asset('images/performer-rhs.jpg') }}" alt="Performer Right" class="rounded-[30px] w-[350px] h-[350px] object-cover">
    </div>
</section>
