<?php

declare(strict_types=1);

namespace App\Twig;

class TwigExtension extends \Twig_Extension
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getName()
    {
        return 'app';
    }

    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction('asset', [$this, 'asset']),
            new \Twig\TwigFunction('getenv', [$this, 'getenv']),
            new \Twig\TwigFunction('config', [$this, 'config']),
        ];
    }

    public function asset($name)
    {
        return env('APP_URL') . '/' . $name;
    }

    public function getenv($key, $default = null)
    {
        return env($key, $default);
    }

    public function config($key)
    {
        return $this->container->config->get($key);
    }
}
