<?php

namespace App\Providers;

use A17\Twill\Models\Setting;
use App\Models\Linktree;
use App\Models\MenuLink;
use App\Models\Page;
use App\Observers\CacheObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [SendEmailVerificationNotification::class],
    ];

    /**
     * The model observers for your application.
     *
     * @var array
     */
    protected $observers = [
        Setting::class => [CacheObserver::class],
        Page::class => [CacheObserver::class],
        Linktree::class => [CacheObserver::class],
        MenuLink::class => [CacheObserver::class],
    ];

    #[\Override]
    public function boot(): void
    {
    }

    #[\Override]
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
