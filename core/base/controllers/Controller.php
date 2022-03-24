<?php

namespace app\core\base\controllers;

use app\core\base\controllers\middlewares\BaseMiddleware;
use app\core\base\models\CsvFile;

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    
    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }


    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    public function show()
    {
        $dbtable = new CsvFile();
        return $dbtable->showCsv();
    }

}