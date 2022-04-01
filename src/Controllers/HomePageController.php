<?php

namespace App\Controllers;

use App\Models\CarTypeModel;
use App\Models\CoverTypeModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class HomePageController
{
    private $renderer;
    private $carTypeModel;
    private $coverTypeModel;

    public function __construct(PhpRenderer $renderer, CarTypeModel $carTypeModel, CoverTypeModel $coverTypeModel)
    {
        $this->renderer = $renderer;
        $this->carTypeModel = $carTypeModel;
        $this->coverTypeModel = $coverTypeModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['carType'] = $this->carTypeModel->getCarTypes();
        $args['coverType'] = $this->coverTypeModel->getCoverTypes();

        return $this->renderer->render($response, "home.phtml", $args);
    }
}
