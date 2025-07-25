@extends('layouts.public')

@php
    $faqs = [
        [
            'question' => 'What is BandBaseHQ?',
            'answer' => '<p><strong>BandBaseHQ</strong> is a platform that helps you manage gigs, tours, finances, and more — all in one place.</p>'
        ],
        [
            'question' => 'How do I invite performers?',
            'answer' => '<ul class="list-disc pl-6"><li>Go to your Band settings.</li><li>Click "Invite Performer."</li><li>Assign a role and send the invite.</li></ul>'
        ],
        [
            'question' => 'Can I manage multiple bands?',
            'answer' => '<p>Yes! You can be a member or admin of more than one Band within the same account.</p>'
        ],
    ];
@endphp

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="faq-hero" class="mt-3 mb-3">
            <x-public.global.hero-section />
        </div>

        <div id="faq-title" class="mt-3 mb-3">
            <h1 class="heading-h1">BandBaseHQ FAQ's</h1>
        </div>

        <div id="faq-accordians" class="mt-3 mb-0">
            <x-public.global.faq-section :faqs="$faqs" />
        </div>
    </div>
@endsection
