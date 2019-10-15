<?php

namespace app\models;

use yii\db\ActiveRecord;

class  UserRecord extends ActiveRecord
{
    public static function TableName()
    {
        return "user";
    }

    public static function findUserByEmail($email)
    {
        return self::findOne(['email' => $email]);
    }

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