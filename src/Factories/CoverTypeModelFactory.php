<?php

namespace App\Factories;

use App\Models\CoverTypeModel;
use Psr\Container\ContainerInterface;

class CoverTypeModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('db');
        return new CoverTypeModel($db);
    }

}