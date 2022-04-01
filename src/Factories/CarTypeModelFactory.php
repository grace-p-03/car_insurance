<?php

namespace App\Factories;

use App\Models\CarTypeModel;
use Psr\Container\ContainerInterface;

class CarTypeModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('db');
        return new CarTypeModel($db);
    }

}