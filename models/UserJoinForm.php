<?php


namespace app\models;


use yii\base\Model;

class UserJoinForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $verifyCode;

    public function rules()
    {
        return [
            [['name', 'email', 'password', 'confirm_password'], 'required'],
            ['name', 'string', 'min' => 3, 'max' => 255],
            ['email', 'email'],
            ['verifyCode', 'captcha', 'captchaAction' => '/site/captcha'],
            ['password', 'string', 'min' => 4],
            ['confirm_password', 'compare', 'compareAttribute' => 'password'],
            ['email', 'errorIfEmailUsed']

        ];
    }

    public function setUserRecord($userRecord)
    {
        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = $this->confirm_password = 'qwas';

    }

    public function errorIfEmailUsed()
    {
        if (UserRecord::existEmail($this->email))
            $this->addError('email', "This E-mail already exits");
    }


}