@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6 space-y-6">
        <x-public.global.hero-section />

        <h1 class="heading-h1">About BandBaseHQ</h1>

        <x-public.global.card-image
            title="What is it?"
            subtitle="Designed by musicians, for musicians"
            image="images/home-about.png"
            :buttonUrl="route('register')"
            buttonText="Register"
        >
            Your all-in-one toolkit for managing everything behind the scenes and on stage. Whether you are a solo act or a full band, we streamline gig planning, tour logistics, marketing campaigns, and more — so you can focus on the music!
        </x-public.global.card-image>

        <x-public.global.card-image
            title="Who are we?"
            subtitle="A bunch of musicians and devs trying to create a better world"
            image="images/about-who.png"
            :buttonUrl="route('features')"
            buttonText="Explore Features"
            :reverse="true"
        >
            Musicians deserve better tools. Having spent years playing, managing, and organizing, BandBaseHQ is the solution we always wished existed.
        </x-public.global.card-image>

        <x-public.global.card-image
            title="Our Mission"
            subtitle="Why we created BandBaseHQ"
            image="images/about-mission.png"
            :buttonUrl="route('features')"
            buttonText="Explore Features"
            :reverse="false"
        >
            Musicians deserve better tools. Having spent years playing, managing, and organizing, BandBaseHQ is the solution we always wished existed.
        </x-public.global.card-image>

    </div>
@endsection
