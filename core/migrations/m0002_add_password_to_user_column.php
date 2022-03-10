<?php

class m0002_add_password_to_user_column
{
    public function up()
    {
        $db = \app\core\base\controllers\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;");
    }

    public function down()
    {
        $db = \app\core\base\controllers\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password;");
    }
}