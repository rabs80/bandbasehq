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
            'button' => 'Agents'
        ]
    ] as $feature)
        <div class="bg-colours-grayscale-900 rounded-[30px] p-8 border border-border-default flex flex-col gap-6 text-left">
            <h2 class="text-surface-default text-2xl font-medium text-center">{{ $feature['title'] }}</h2>
            <ul class="list-disc list-inside text-grayscale-text-body leading-relaxed space-y-1">
                @foreach ($feature['features'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <div class="text-center">
                <a href="#" class="bg-surface-default text-grayscale-text-negative text-xl font-medium px-6 py-3 rounded-2xl inline-block">{{ $feature['button'] }}</a>
            </div>
        </div>
    @endforeach
</section>
