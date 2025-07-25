@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="features-hero" class="mt-3 mb-3">
            <!-- Hero -->
            <x-public.global.hero-section />
        </div>

        <div id="features-title" class="mt-3 mb-3">
            <h1 class="heading-h1">BandBaseHQ Features</h1>
        </div>

        <div id="features-header" class="mt-3 mb-3">
            <!-- Features Header -->
            <x-public.global.card-image
                title="Forget tiresome admin!"
                subtitle="A system for Venues and Agents, as well as Performers!"
                image="images/home-about.png"
            >
                <p>Honing years of experience, consulting with Venues and Agents, BandBaseHQ manages the whole gamut of organising gigs and tours for all involved.
                    <ul class="list-disc pl-6">
                        <li>Performers get to focus on music, </li>
                        <li>Venues concentrate on bookings,</li>
                        <li>Agents get easy collaboration.'</li>
                    </ul>
                </p>
            </x-public.global.card-image>
        </div>

        <div id="features-categories" class="mt-3 mb-3">
            <!-- Feature categories -->
            <div id="band-features">
                <x-public.global.card-image
                    title="For Performers..."
                    subtitle="BandBaseHQ lets you focus on the music"
                    image="images/home-about.png"
                    :buttonUrl="route('band-features')"
                    buttonText="Performer Features"
                    :reverse="true"
                >
                    Your all-in-one toolkit for managing everything behind the scenes and on stage. Whether you are a solo act or a full band, we streamline gig planning, tour logistics, marketing campaigns, and more — so you can focus on the music!
                </x-public.global.card-image>
            </div>

            <div id="venue-features">
                <x-public.global.card-image
                    title="For Venues..."
                    subtitle="Manage all your bookings in one place"
                    image="images/home-about.png"
                    :buttonUrl="route('venue-features')"
                    buttonText="Venue Features"
                >
                    Concentrate on what is important. Booking bands and filling your space. Track performance and maximise income. Manage your diary and sell tickets. Figure out who is worth booking again.
                </x-public.global.card-image>
            </div>

            <div id="agent-features">
                <x-public.global.card-image
                    title="For Agents..."
                    subtitle="Centralised access to all you manage"
                    image="images/home-about.png"
                    :buttonUrl="route('agent-features')"
                    buttonText="Agent Features"
                    :reverse="true"
                >
                    Monitor revenue. Maximise reach. Never forget a task. Collaborate effortlessly. Track performance.
                </x-public.global.card-image>
            </div>
        </div>

        <div id="features-register" class="mt-3 mb-3">
            <!-- Register CTA -->
            <x-public.global.register-cta />
        </div>
    </div>
@endsection
