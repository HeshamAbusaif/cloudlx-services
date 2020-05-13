<?php
namespace App\Providers;

use App\Domain\CloudlxServices\CloudlxServicesRepository;
use App\Infrastructure\RepositoriesImplementations\CloudlxServicesApiRepository;

use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CloudlxServicesRepository::class, CloudlxServicesApiRepository::class);
    }
}
