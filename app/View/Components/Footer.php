<?php

namespace App\View\Components;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    #[\Override]
    public function render(): View|\Closure|string
    {
        /** @var Page[] $links */
        $links = TwillAppSettings::get('homepage.footer.pages');
        $social_links = TwillAppSettings::get('homepage.footer.social_links');

        return view('components.footer', [
            'links' => $links,
            'social_links' => $social_links,
        ]);
    }
}
