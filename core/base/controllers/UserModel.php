<?php

namespace app\core\base\controllers;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}