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


}