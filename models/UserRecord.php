<?php

namespace app\models;

use yii\db\ActiveRecord;

class  UserRecord extends ActiveRecord
{
    public static function TableName()
    {
        return "user";
    }

//    public function setTestUser()
//    {
//        $this->name = 'John';
//        $this->email = "dsd@gmail.com";
//        $this->passhash = "fdsfsdfsdkfjskdjfsdlk;fk";
//        $this->status = 2;
//    }

    public function existEmail($email)
    {
        $count = static::find()->where(['email' => $email])->count();
        return $count > 0;
    }

    public function setUserJoinForm(UserJoinForm $userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email = $userJoinForm->email;
        $this->passhash = $userJoinForm->password;
        $this->status = 1;

    }
}