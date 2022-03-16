<?php

class m0003_create_table_first_csv
{
   public function up()
   {
       $db = \app\core\base\controllers\Application::$app->db;

       $SQL = "CREATE TABLE firstcsv(
           `AccountID` INT NOT NULL ,
            `FirstName` VARCHAR(255) NULL ,
            `LastName` VARCHAR(255) NULL ,
            `Email` VARCHAR(255) NOT NULL ,
            `MobilePhone` VARCHAR(255) NULL ,
            PRIMARY KEY (`AccountID`)
            ) ENGINE = InnoDB;";

       $db->pdo->exec($SQL);
   }

    public function down()
    {
        $db = \app\core\base\controllers\Application::$app->db;
        $SQL = "DROP TABLE firstCsv;";

        $db->pdo->exec($SQL);
    }

}