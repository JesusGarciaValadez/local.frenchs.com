<?php

namespace Frenchs\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Frenchs\Events\SomeEvent' => [
            'Frenchs\Listeners\EventListener',
        ],
        'Frenchs\Events\RecipeUploaded' => [
            'Frenchs\Listeners\SendMailWhenRecipeUploaded'
        ],
        'Frenchs\Events\ContactFormSended' => [
            'Frenchs\Listeners\SendMailWhenContactSended'
        ]
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
