<?php

namespace app\models;

use yii\base\Model;
use yii;

class UserLoginForm extends Model
{
    public $email;
    public $password;
    public $verifyCode;
    //public $remember;

    public function rules()
    {
        return [
            [['email', 'password', 'verifyCode'], 'required'],
            ['email', 'email'],
            ['email', 'errorIfEmailNotFound'],
            ['password', 'errorIfPasswordWrong']
        ];

    }

    public function errorIfPasswordWrong()
    {
        if ($this->hasErrors())
            return;
        $userRecord = UserRecord::findUserByEmail($this->email);
        if ($this->password != $userRecord->passhash)
            $this->addError('password', 'Wrong password');
    }

    public function errorIfEmailNotFound()
    {
        $userRecord = UserRecord::findUserByEmail($this->email);
        if ($userRecord->email != $this->email)
            $this->addError('email', 'This email does notregistered');
    }

    public function login()
    {
        if ($this->hasErrors())
            return;
        $userRecord = UserRecord::findUserByEmail($this->email);
        $userIdentity = UserIdentity::findIdentity($userRecord->id);
        Yii::$app->user->login($userIdentity);
    }

}