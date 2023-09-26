<?php

namespace Boilr\App\Service;

use Twig\Environment;

use Websystems\BoilrCore\Interface\TemplateInterface;

class TwigTemplate implements TemplateInterface
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function render(string $view, array $parameters = [])
    {
        return $this->twig->display($view, $parameters);
    }
}