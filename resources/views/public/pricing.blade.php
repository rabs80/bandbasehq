@extends('layouts.public')

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
            'buttonTarget' => route('register', ['role' => 'band']),
            'buttonLabel' => '£30 per month'
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
            'buttonTarget' => route('register', ['role' => 'venue']),
            'buttonLabel' => '£50 per month'
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
            'buttonTarget' => route('register', ['role' => 'agent']),
            'buttonLabel' => '£50 per month'
        ]
    ];
@endphp

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="pricing-hero" class="mt-3 mb-3">
            <x-public.global.hero-section />
        </div>

        <div id="pricing-title" class="mt-3 mb-3">
            <h1 class="heading-h1">BandBaseHQ Pricing</h1>
        </div>

        <div id="pricing-heeader" class="mt-3 mb-3">
            <!-- Pricing Header -->
            <x-public.global.card-image
                title="Pricing structure"
                subtitle="Cost centred around music"
                image="images/home-about.png"
            >
                It is all about the music! That's why we've come in at a low price for performers. Doesn't matter if you're a solo artist or a 30-piece orchestra, what you pay is the same. Doesn't matter if you're a Stadium or a Barn, you pay the same. If you manage 100 bands, or 2, you pay the same - of course we'd love all your bands to also use BandBaseHQ, though!
            </x-public.global.card-image>
        </div>

        <div id="pricing-cards" class="mt-3 mb-3">
            <!-- Pricing cards -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                @foreach ($featureData as $feature)
                    <x-public.global.feature-card
                        :title="$feature['title']"
                        :features="$feature['features']"
                        :buttonUrl="$feature['buttonTarget']"
                        :buttonText="$feature['buttonLabel']"
                    />
                @endforeach
            </section>
        </div>

        <div id="pricing-contact" class="mt-3 mb-3">
            <!-- Contact form -->
            <x-public.global.contact />
        </div>
    </div>
@endsection
