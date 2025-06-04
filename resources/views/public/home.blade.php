@extends('layouts.public')

@section('content')
<div class="max-w-screen-xl mx-auto p-6 space-y-6">
    <!-- Hero -->
    <x-global.hero-section />

    <!-- About -->
    <x-home.about-section />

    <!-- Features -->
    <x-home.feature-cards />


    <!-- Register CTA -->
    <x-global.register-cta />

    <!-- Contact Form -->
    <x-global.contact />
</div>
@endsection
