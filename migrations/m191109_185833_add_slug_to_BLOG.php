<?php

use yii\db\Migration;

/**
 * Class m191109_185833_add_slug_to_BLOG
 */
class m191109_185833_add_slug_to_BLOG extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            '{{%blog}}', 'slug',
            $this->string()->comment('slug')->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%blog}}', 'slug');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191109_185833_add_slug_to_BLOG cannot be reverted.\n";

        return false;
    }
    */
}
