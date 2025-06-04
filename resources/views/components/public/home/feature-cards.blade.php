<!-- Features -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
    @foreach ([
        [
            'title' => 'For Bands & Performers',
            'features' => [
                'Manage performers',
                'Create gigs',
                'Market your gigs',
                'Engage fans',
                'Plan tours',
                'Get paid'
            ],
            'button-target' => '#band-features',
            'button' => 'Bands'
        ],
        [
            'title' => 'For Venues',
            'features' => [
                'Book bands',
                'Manage diaries',
                'Track performance',
                'Maximise income',
                'Sell tickets',
                'Contact management'
            ],
            'button-target' => '#venue-features',
            'button' => 'Venues'
        ],
        [
            'title' => 'For Agents',
            'features' => [
                'Revenue monitoring',
                'Centralised access',
                'Maximise reach',
                'Workflow based',
                'Collaboration',
                'Ticketing made easy'
            ],
            'button-target' => '#agent-features',
            'button' => 'Agents'
        ]
    ] as $feature)
        <div class="bg-surface-card rounded-[30px] p-8 border border-border-subtle flex flex-col gap-6 text-left">
            <h2 class="subheading text-center">{{ $feature['title'] }}</h2>
            <ul class="list-disc list-inside body-text leading-relaxed space-y-1">
                @foreach ($feature['features'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <div class="text-center">
                <x-public.button :href="url()->to(route('features') . $feature['button-target'])">
                    {{ $feature['button'] }}
                </x-button>
            </div>
        </div>
    @endforeach
</section>
