<?php

namespace app\core\user\controllers;

use app\core\base\controllers\Application;
use app\core\base\controllers\Controller;
use app\core\base\controllers\Request;

class SiteController extends Controller
{
    public function home()
    {   $params = $this->show();

        return $this->render('home', $params);
    }
}
