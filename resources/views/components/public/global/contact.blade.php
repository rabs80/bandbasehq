
    <section class="mx-auto p-6 bg-surface-card border border-border-subtle rounded-[30px]">
        <div class="heading-h2 items-center text-center">
                <h2>Get in touch</h2>
        </div>
        <div class="max-w-screen-xl w-full rounded-[30px] flex flex-row items-center">
            <div>
                <img src="{{ asset('images/performer-lhs.jpg') }}" alt="Performer Left" class="rounded-[30px] w-[350px] h-[350px] object-cover">
            </div>

            <div class="form">
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    <x-form.input name="name" label="Your Name" required />
                    <x-form.input name="email" type="email" label="Email Address" required />
                    <x-form.input name="subject" label="Subject" />
                    <x-form.textarea name="message" label="Your Message" required />

                    <x-public.button class="mt-6 w-full">Send Message</x-public.button>
                </form>
            </div>

            <div><img src="{{ asset('images/performer-rhs.jpg') }}" alt="Performer Right" class="rounded-[30px] w-[350px] h-[350px] object-cover"></div>
        </div>
    </section>
