<?php

namespace app\core\exception;

/**
 * Class ForbiddenException
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access page';
    protected $code = 403;
}