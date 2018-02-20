<?php

namespace App\Providers;

use Validator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Validator::extend('recaptcha', function($attribute, $value, $parameters) {
            
            $client = new \GuzzleHttp\Client();
            $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('NOCAPTCHA_SECRET'),
                    'response'=>$value,
                 ]
            ]
            );

            $body = json_decode((string)$response->getBody());
            return $body->success;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
