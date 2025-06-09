@props(['faqs' => []])

<section class="space-y-4">
    @foreach ($faqs as $faq)
        <x-public.global.accordion :title="$faq['question']">
            {!! $faq['answer'] !!}
        </x-accordion>
    @endforeach
</section>
