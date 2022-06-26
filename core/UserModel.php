<?php

namespace app\core;

use app\core\db\DbModel;

/**
 * Class UserModel
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}