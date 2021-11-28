<?php 

namespace LaravelMultiMailer;

use Illuminate\Support\Facades\Config;

class Mailer 
{
    protected array $config;

    public function __construct(
        string $host = 'smtp.gmail.com', 
        int $port = 465, 
        string $senderName = 'John Doe', 
        string $username, 
        string $password, 
        string $encryption = 'ssl'
    )
    {
        $this->config = [
            'host' => $host,
            'port' => $port,
            'from' => ['address' => $username, 'name' => $senderName],
            'username' => $username,
            'password' => $password,
            'encryption' => $encryption
        ];
    }

    public function setMail()
    {
        Config::set('mail', $this->config);
    }
}