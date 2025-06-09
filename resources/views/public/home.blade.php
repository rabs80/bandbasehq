@extends('layouts.public')

@section('content')
<div class="max-w-screen-xl mx-auto p-6 space-y-6">
    <!-- Hero -->
    <x-public.global.hero-section />

    <!-- About -->
    <x-public.global.card-image
        title="What is it?"
        subtitle="Designed by musicians, for musicians"
        image="images/home-about.png"
        :buttonUrl="route('about')"
        buttonText="About"
    >
        <p>Your digital bandmate, built to help you:</p>
        <ul class="list-disc pl-6">
            <li>Plan tours with confidence</li>
            <li>Assign and track tasks</li>
            <li>Manage bookings and revenue</li>
        </ul>
        <p>Let us make gig management effortless.</p>
    </x-public.global.card-image>

    <!-- Features -->
    @php
    $featureData = [
        [
            'title' => 'For Bands & Performers',
            'features' => [
                'Manage performers',
                'Create gigs',
                'Market your gigs',
                'Engage fans',
                'Plan tours',
                'Get paid'
            ],
            'buttonTarget' => '#band-features',
            'buttonLabel' => 'Bands'
        ],
        [
            'title' => 'For Venues',
            'features' => [
                'Book bands',
                'Manage diaries',
                'Track performance',
                'Maximise income',
                'Sell tickets',
                'Contact management'
            ],
            'buttonTarget' => '#venue-features',
            'buttonLabel' => 'Venues'
        ],
        [
            'title' => 'For Agents',
            'features' => [
                'Revenue monitoring',
                'Centralised access',
                'Maximise reach',
                'Workflow based',
                'Collaboration',
                'Ticketing made easy'
            ],
            'buttonTarget' => '#agent-features',
            'buttonLabel' => 'Agents'
        ]
    ];
    @endphp

    <section class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        @foreach ($featureData as $feature)
            <x-public.global.feature-card
                :title="$feature['title']"
                :features="$feature['features']"
                :buttonUrl="route('features') . $feature['buttonTarget']"
                :buttonText="$feature['buttonLabel']"
            />
        @endforeach
    </section>

    <!-- Register CTA -->
    <x-public.global.register-cta />

    <!-- Contact Form -->
    <x-public.global.contact />
</div>
@endsection
