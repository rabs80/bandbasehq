@extends('layouts.public')

@section('content')
<div class="max-w-screen-xl mx-auto p-6 space-y-6">
    <!-- Hero -->
    <x-public.global.hero-section />

    <!-- About -->
    <x-public.home.about-section />

    <!-- Features -->
    <x-public.home.feature-cards />


    <!-- Register CTA -->
    <x-public.global.register-cta />

    <!-- Contact Form -->
    <x-public.global.contact />
</div>
@endsection
