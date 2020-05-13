<?php

namespace App\Providers;

use App\Domain\Core\CloudlxService;
use Illuminate\Support\ServiceProvider;
use App\Infrastructure\Service\CloudlxRequestService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(CloudlxService::class, function () {
            return new CloudlxRequestService(
                new MailChimp(env('MAILCHIMP_APIKEY')),
                env('MAILCHIMP_LIST_ID')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
