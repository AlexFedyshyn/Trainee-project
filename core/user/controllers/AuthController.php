<?php

namespace app\core\user\controllers;

use app\core\base\controllers\Controller;
use app\core\base\controllers\Request;
use app\core\base\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }


    public function register(Request $request)
    {
        $registerModel = new RegisterModel();

        if ($request->isPost()){
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

}