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

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();

        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        return 'Handling submitted data';
    }
}
