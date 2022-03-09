<?php

namespace app\core\user\controllers;

use app\core\base\controllers\Controller;
use app\core\base\controllers\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()){
            return 'Handle submited data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }

}