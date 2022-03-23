<?php

class m0004_create_admin_user
{


    public function up()
    {
        $db = \app\core\base\controllers\Application::$app->db;
        $pass = password_hash('12345', PASSWORD_DEFAULT);

        $SQL = "INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `status`, `created_at`, `password`) 
			VALUES ('1', 'admin@example.com', 'admin', 'admin', '0', CURRENT_TIMESTAMP, '$pass');";

        $db->pdo->exec($SQL);





}
}