<?php

namespace app\core\user\controllers;

use app\core\base\controllers\Application;
use app\core\base\controllers\Controller;
use app\core\base\controllers\middlewares\AuthMiddleware;
use app\core\base\controllers\Request;
use app\core\base\controllers\Response;
use app\core\base\models\LoginForm;
use app\core\base\models\User;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['register']));

    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/');

                return;
            }
        }

        $this->setLayout('main');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost()){
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()){
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');

            }

            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('main');
        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }


}
