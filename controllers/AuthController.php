<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

/**
 * Class AuthController
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');

        return $this->render('login', $request);
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');

        $user = new User();

        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
        }

        return $this->render('register', [
            'model' => $user
        ]);
    }
}