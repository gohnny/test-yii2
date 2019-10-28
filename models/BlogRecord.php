<?php

namespace app\models;

use yii\db\ActiveRecord;

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

}
