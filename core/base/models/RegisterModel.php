<?php

namespace app\core\base\models;

use app\core\base\controllers\Model;

class RegisterModel extends Model
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';

    public function register()
    {
        echo "Creating new user";
    }

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED , [self::RULE_MIN, 'min' => 4], [self::RULE_MAX, 'max' => 24]],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }


}