<?php

namespace app\models;

use eapdob\phpmvc\Application;
use eapdob\phpmvc\Model;

/**
 * Class LoginForm
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\models
 */
class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        Application::$app->login($user);

        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}