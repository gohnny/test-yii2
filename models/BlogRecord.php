<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\SluggableBehavior;

class BlogRecord extends ActiveRecord
{
    static public function TableName()
    {
        return 'blog';
    }
}
