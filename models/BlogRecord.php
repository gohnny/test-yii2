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

    public static function FindBlogById($id)
    {
        return self::findOne(['id' => $id]);
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
            ]
        ];
    }

}
