<?php 

namespace LaravelMultiMailer\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use LaravelMultiMailer\Mailer;

class MailServiceMiddleware
{
    public function handle(Request $request, $next)
    {
        $config = [
            'driver' => 'smtp',
            'host' => 'smtp.gmail.com',
            'port' => 465,
            'from' => ['address' => 'taylor@laravel.com', 'name' => 'Taylor'],
            'password' => 'somepassword',
            'encryption' => 'ssl'
        ];

        $mailer = new Mailer($config);
        $mailer->setMail();
        
        return $next($request);
    }
}