<?php

namespace App\View\Components;

use A17\Twill\Facades\TwillAppSettings;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        /** @var \App\Models\Page[] $links */
        $links = TwillAppSettings::get('homepage.footer.pages');
        $social_links = TwillAppSettings::get('homepage.footer.social_links');

        return view('components.footer', [
          'links' => $links,
          'social_links' => $social_links,
        ]);
    }
}
