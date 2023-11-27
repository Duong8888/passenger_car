<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Firebase::class, function ($app) {
            $factory = (new Factory)
                ->withServiceAccount(storage_path('app/' . config('firebase.credentials')))
                ->withStorageBucket(config('firebase.storage_bucket'));

            return $factory->create();
        });
    }
}
