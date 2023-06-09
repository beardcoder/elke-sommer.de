<?php

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Services\Settings\SettingsGroup;
use Illuminate\Support\ServiceProvider;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
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
      NavigationLink::make()
        ->forModule('appointments')
        ->title('Veranstaltungen')
    );

    TwillAppSettings::registerSettingsGroup(
      SettingsGroup::make()
        ->name('homepage')
        ->label('Homepage')
    );
  }
}
