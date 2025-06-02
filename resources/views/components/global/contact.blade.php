<section class="flex justify-center items-center gap-6 px-6">
    <div class="max-w-screen-xl w-full bg-colours-grayscale-900 rounded-[30px] p-6 flex flex-row items-center gap-6 border border-border-default">
        <img src="{{ asset('images/performer-lhs.jpg') }}" alt="Performer Left" class="rounded-[30px] w-[300px] h-[300px] object-cover">

        <form action="{{ route('contact.send') }}" method="POST" class="flex flex-col flex-1 gap-6">
            @csrf
            <div class="flex flex-col">
                <input id="name" name="name" type="text" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Name" />
            </div>

            <div class="flex flex-col">
                <input id="email" name="email" type="email" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Email" />
            </div>

            <div class="flex flex-col">
                <textarea id="message" name="message" rows="4" required class="bg-surface-darker text-grayscale-text-negative px-4 py-3 rounded-lg font-roboto" placeholder="Message"></textarea>
            </div>
        </form>

        <button type="submit" form="contact-form" class="bg-surface-default text-grayscale-text-negative text-2xl font-medium px-10 py-6 rounded-xl">
            Send
        </button>

        <img src="{{ asset('images/performer-rhs.jpg') }}" alt="Performer Right" class="rounded-[30px] w-[300px] h-[300px] object-cover">
    </div>
</section>
