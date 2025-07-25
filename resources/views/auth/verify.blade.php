@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="verify-hero" class="mt-3 mb-3">
            <!-- Hero -->
            <x-public.global.hero-section />
        </div>

        <div id="verify-form" class="mt-3 mb-3">
            <!-- Verify Email -->
            <section class="max-w-xl mx-auto p-6 bg-surface-card border border-border-subtle rounded-[30px] mt-12 text-center">
                <h2 class="heading-h1 mb-4">Verify Your Email</h2>

                <p class="mb-4 text-grayscale-text">
                    Thanks for signing up! Please verify your email address by clicking the link we just emailed to you.
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="text-green-500 mb-4">
                        A new verification link has been sent to your email address.
                    </p>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <x-public.button>Resend Verification Email</x-public.button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 underline hover:text-red-700">
                        Logout
                    </button>
                </form>
            </section>
        </div>
    </div>
@endsection
