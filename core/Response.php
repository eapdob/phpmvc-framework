<?php

namespace app\core;

/**
 * Class Response
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
class Response
{
    public function setStatusCode(int $code)
    {
        return http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}