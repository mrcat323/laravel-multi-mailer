<?php 

namespace LaravelMultiMailer;

use Illuminate\Support\Facades\Config;

class Mailer 
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function setMail()
    {
        Config::set('mail', $this->config);
    }
}