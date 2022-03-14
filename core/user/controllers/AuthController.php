<?php

namespace app\core\user\controllers;

use app\core\base\controllers\Controller;
use app\core\base\controllers\Request;
use app\core\base\models\User;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }


    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost()){
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()){
                return 'Success';
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $user
        ]);
    }

}