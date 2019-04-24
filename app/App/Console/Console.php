<?php

declare(strict_types=1);

namespace App\Console;

use Symfony\Component\Console\Application;

class Console extends Application
{
    protected $slim;

    public function __construct(\Slim\App $slim)
    {
        parent::__construct();
        $this->slim = $slim;
    }

    public function boot(Kernel $kernel): void
    {
        foreach ($kernel->getCommands() as $command) {
            $this->add(new $command($this->getSlim()->getContainer()));
        }
    }

    protected function getSlim()
    {
        return $this->slim;
    }
}
