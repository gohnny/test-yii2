<?php

namespace app\models;

use yii\db\ActiveRecord;

class  UserRecord extends ActiveRecord
{
    public static function TableName()
    {
        return "user";
    }

    public function setTestUser()
    {
        $this->name = 'John';
        $this->email = "dsd@gmail.com";
        $this->passhash = "fdsfsdfsdkfjskdjfsdlk;fk";
        $this->status = 2;
    }
}