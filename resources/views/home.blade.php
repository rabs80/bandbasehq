@extends('layouts.layout')

@section('content')
<div class="max-w-screen-xl mx-auto p-6 space-y-6">
    <!-- Hero -->
    <x-home.hero-section />

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
