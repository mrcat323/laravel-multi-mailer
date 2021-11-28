<?php 

namespace LaravelMultiMailer\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use LaravelMultiMailer\Mailer;

class MailServiceMiddleware
{
    public function handle(Request $request, $next)
    {
        $mailer = new Mailer(username: 'taylor@gmail.com', password: 'laravel rocks');
        $mailer->setMail();

        return $next($request);
    }
}