<?php

namespace app\controllers;

use app\models\ContactForm;
use eapdob\phpmvc\Application;
use eapdob\phpmvc\Controller;
use eapdob\phpmvc\Request;
use eapdob\phpmvc\Response;

/**
 * Class SiteController
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Evgenii'
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();

        if ($request->isPost()) {
            $contact->loadData($request->getBody());

            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for your message');
                Application::$app->response->redirect('/contact');
                exit;
            }
        }

        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}