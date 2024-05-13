<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class APIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (! App::environment(['local', 'testing'])) {
            return;
        }
        Http::fake(function (Request $request) {
            if (Str::is('*/v1/users*', $request->url())) {
                $users = file_get_contents(base_path('.mock/api/user/users.json'));
                return Http::response($users);
            }
        });        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
