<?php

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Models\Setting;
use A17\Twill\Services\Settings\SettingsGroup;
use A17\Twill\View\Components\Navigation\NavigationLink;
use App\Models\Linktree;
use App\Models\MenuLink;
use App\Models\Page;
use App\Observers\CacheObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register(): void
    {
    }

    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $this->registerObservers();
        $this->registerTwillNavigation();
        $this->registerTwillSettings();
    }

    private function registerObservers(): void
    {
        Setting::observe(CacheObserver::class);
        Page::observe(CacheObserver::class);
        Linktree::observe(CacheObserver::class);
        MenuLink::observe(CacheObserver::class);
    }

    private function registerTwillNavigation(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('pages')
                ->title('Seiten')
                ->setChildren([
                    NavigationLink::make()
                        ->forModule('menuLinks')
                        ->title('Navigation'),
                ])
        );
        TwillNavigation::addLink(
            NavigationLink::make()
                ->forSingleton('linktree')
                ->title('Linktree')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('events')
        );
    }

    private function registerTwillSettings(): void
    {
        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()
                ->name('homepage')
                ->label('Homepage')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()
                ->name('structureddata')
                ->label('Strukturierte Daten')
        );
    }
}
