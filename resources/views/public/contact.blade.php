@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="contact-hero" class="mt-3 mb-3">
            <x-public.global.hero-section />
        </div>

        <div id="contact-title" class="mt-3 mb-3">
            <h1 class="heading-h1">Contact BandBaseHQ</h1>
            <p class="mt-4 text-lg text-gray-300">Get in touch with the team at BandBaseHQ and we'll get back to you as soon as we can.</p>
        </div>

        <div id="contact-form" class="mt-3 mb-3">
            <!-- Contact form -->
            <x-public.global.contact />
        </div>
    </div>
@endsection
