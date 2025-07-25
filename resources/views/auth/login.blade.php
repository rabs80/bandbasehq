@extends('layouts.public')

@section('content')
    <div class="max-w-screen-xl mx-auto p-6">
        <div id="login-hero" class="mt-3 mb-3">
            <!-- Hero -->
            <x-public.global.hero-section />
        </div>

        <div id="login-title" class="mt-3 mb-3">
            <h1 class="heading-h1">BandBaseHQ Login</h1>
        </div>

        <div id="login-form" class="mt-3 mb-3">
            <section class="max-w-xl mx-auto p-6 bg-surface-card border border-border-subtle rounded-[30px] mt-12">
                <h2 class="heading-h1 mb-6 text-center">Login</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-form.input name="email" type="email" label="Email Address" required />
                    <x-form.input name="password" type="password" label="Password" required />

                    <div class="flex items-center justify-between mt-4">
                        <label class="flex items-center gap-2 text-white">
                            <input type="checkbox" name="remember" class="accent-primary">
                            Remember Me
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">
                            Forgot Your Password?
                        </a>
                    </div>

                    <x-public.button class="mt-6 w-full">Login</x-public.button>
                </form>
            </section>
        </div>
    </div>
@endsection
