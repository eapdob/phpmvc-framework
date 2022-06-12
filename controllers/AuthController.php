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
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            return 'Handle submitting data';
        }

        $this->setLayout('auth');
        return $this->render('register', $request);
    }
}