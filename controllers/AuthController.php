<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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

        $registerModel = new RegisterModel();
        $registerModel->loadData($request->getBody());

        if ($request->isPost()) {
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Create user';
            }
        }

        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}