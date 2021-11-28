<?php 

namespace LaravelMultiMailer\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Providers\ServiceProvider;

class MailServiceProvider extends ServiceProvider 
{
    public function register()
    {
        $mailer = [
            'driver' => 'smtp',
            'host' => 'smtp.gmail.com',
            'from' => ['address' => 'laravel@gmail.com', 'name' => 'Laravel'],
            'username' => 'laravel@gmail.com',
            'password' => 'laravel'
        ];

        Config::set('mail', $mailer);
    }
    public function boot()
    {
        //
    }
}