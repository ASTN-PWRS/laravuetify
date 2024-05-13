<?php

namespace App\Providers;
use App\Services\Sha256\Sha256HashService;
use Illuminate\Support\ServiceProvider;

class Sha256HashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('hash', Sha256HashService::class);
    }

    /**
     * このプロバイダにより提供されるサービスの取得
     *
     * @return array
     */
    public function provides(): array
    {
        return ['hash'];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
