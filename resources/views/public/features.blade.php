@extends('layouts.public')

@section('content')
    <section>
        <!-- Hero -->
        <x-global.hero-section />
        <div class="mb-8">
            <h1 class="heading-h1">BandBaseHQ Features</h1>
            <h2 class="mt-4 subheading">This is the features page. Add some juicy content here!</p>
        </div>
        <div id="band-features" class="card body-text mb-[200px]">
            <p>All the band features</p>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
            </ul>
        </div>
        <div id="venue-features" class="card body-text mb-[200px]">
            <p>All the venue features</p>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
            </ul>
        </div>
        <div id="agent-features" class="card body-text mb-2">
            <p>All the agent features</p>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
            </ul>
        </div>
    </section>
@endsection
