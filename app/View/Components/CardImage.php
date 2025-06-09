<?php
namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class CardImage extends Component
{
    public string $title;
    public string $subtitle;
    public string $body;
    public string $image;
    public ?string $buttonText;
    public ?string $buttonUrl;
    public bool $reverse;

    public function __construct(
        string $title,
        string $subtitle,
        string $body,
        string $image,
        string $buttonText = null,
        string $buttonUrl = null,
        bool $reverse = false
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->body = Str::markdown($body);
        $this->image = $image;
        $this->buttonText = $buttonText;
        $this->buttonUrl = $buttonUrl;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.card-image');
    }
}
