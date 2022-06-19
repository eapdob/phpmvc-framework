<?php

namespace app\core;

/**
 * Class UserModel
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}