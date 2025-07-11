@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6 space-y-6">
        <x-public.global.hero-section />
        <h1 class="heading-h1">Contact BandBaseHQ</h1>
        <p class="mt-4 text-lg text-gray-300">This is the contact page. Add some juicy content here!</p>

        <!-- Contact form -->
        <x-public.global.contact />
    </div>
@endsection
