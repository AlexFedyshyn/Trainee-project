<?php

namespace app\core\base\models;

use app\core\base\controllers\DbModel;
use app\core\base\controllers\Model;

class CsvFile extends DbModel
{
    const paramArray = [
        0 => 'AccountID',
        1 => 'FirstName',
        2 => 'LastName',
        3 => 'Email',
        4 => 'MobilePhone'

    ];
    public int $AccountID;
    public string $FirstName = '';
    public string $LastName = '';
    public string $Email = '';
    public string $MobilePhone = '';

    public static function tableName(): string
    {
        return 'firstcsv';
    }

    public static function primaryKey(): string
    {
        return 'AccountID';
    }

    public function save()
    {
        return parent::saveCsv();
    }

    public function showCsv()
    {
        return parent::showCsv();
    }

    public function rules(): array
    {
    }

    public function attributes():array
    {
        return ['AccountID', 'FirstName', 'LastName', 'Email', 'MobilePhone'];
    }

    public function loadData($data)
    {
        foreach ($data as $key => $value){
            if(property_exists($this, self::paramArray[$key])){
                $propertyName = self::paramArray[$key];
                $this->$propertyName = $value;
            }
        }
    }

}