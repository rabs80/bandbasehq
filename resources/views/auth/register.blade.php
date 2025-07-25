@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="register-hero" class="mt-3 mb-3">
            <!-- Hero -->
            <x-public.global.hero-section />
        </div>

        <div id="register-title" class="mt-3 mb-3">
            <h1 class="heading-h1">BandBaseHQ Registration</h1>
        </div>

        <div id="register-form" class="mt-3 mb-3">
            <section class="max-w-xl mx-auto p-6 bg-surface-card border border-border-subtle rounded-[30px]">
                <h2 class="heading-h1 mb-6 text-center">Register Your Account</h2>

                @php
                    $role = old('role', $role ?? 'band');
                @endphp

                <form x-data="{ role: '{{ old('role', $role ?? 'band') }}' }" action="{{ route('register.submit') }}" method="POST">
                    @csrf

                    {{-- Radio group for selecting user type --}}
                    <x-form.radio-group
                        name="role"
                        label="Registering as"
                        layout="horizontal"
                        :options="[
                            'band' => 'Band/Performer',
                            'venue' => 'Venue',
                            'agent' => 'Agent'
                        ]"
                        :selected="$role"
                        required
                    />

                    {{-- Common Fields --}}
                    <x-form.input name="name" label="Your Name" required />
                    <x-form.input name="email" label="Email Address" type="email" required />
                    <x-form.input name="password" label="Password" type="password" required />
                    <x-form.input name="password_confirmation" label="Confirm Password" type="password" required />

                    {{-- Band Fields --}}
                    <div x-show="role === 'band'" x-cloak>
                        <x-form.input name="band_name" label="Band Name" required />
                        <x-form.input name="genre" label="Music Genre" />
                        <x-form.textarea name="band_bio" label="Band Bio" />
                    </div>

                    {{-- Venue Fields --}}
                    <div x-show="role === 'venue'" x-cloak>
                        <x-form.input name="venue_name" label="Venue Name" required />
                        <x-form.input name="location" label="Venue Location" />
                        <x-form.input name="contact_phone" label="Contact Phone" />
                    </div>

                    {{-- Agent Fields --}}
                    <div x-show="role === 'agent'" x-cloak>
                        <x-form.input name="agency_name" label="Agency Name" required />
                        <x-form.input name="license_number" label="License Number" />
                    </div>

                    <x-public.button class="mt-6 w-full">Register</x-public.button>
                </form>
            </section>
        </div>
    </div>
@endsection
