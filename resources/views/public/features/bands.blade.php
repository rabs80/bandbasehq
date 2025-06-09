@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6 space-y-6">
        <!-- Hero -->
        <x-public.global.hero-section />

        <h1 class="heading-h1">Band Features</h1>

        <!-- Features Header -->
        <x-public.global.card-image
            title="Forget tiresome admin!"
            subtitle="A system for Venues and Agents, as well as Performers!"
            image="images/home-about.png"
        >
            Honing years of experience, consulting with Venues and Agents, BandBaseHQ manages the whole gamut of organising gigs and tours for all involved. Performers get to focus on music, Venues concentrate on bookings, Agents get easy collaboration.
        </x-public.global.card-image>

        <!-- Feature categories -->
        <div id="band-features"></div>
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

        <div id="venue-features"></div>
        <x-public.global.card-image
            title="For Venues..."
            subtitle="Manage all your bookings in one place"
            image="images/home-about.png"
            :buttonUrl="route('venue-features')"
            buttonText="Venue Features"
        >
            Concentrate on what is important. Booking bands and filling your space. Track performance and maximise income. Manage your diary and sell tickets. Figure out who is worth booking again.
        </x-public.global.card-image>

        <div id="agent-features"></div>
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

        <!-- Register CTA -->
        <x-public.global.register-cta />
    </div>
@endsection
