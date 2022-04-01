<?php

namespace App\Factories;


use App\Controllers\HomePageController;
use Psr\Container\ContainerInterface;

class HomePageControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $carTypeModel = $container->get('CarTypeModel');
        $coverTypeModel = $container->get('CoverTypeModel');
        $renderer = $container->get('renderer');
        return new HomePageController($renderer, $carTypeModel, $coverTypeModel);
    }
}