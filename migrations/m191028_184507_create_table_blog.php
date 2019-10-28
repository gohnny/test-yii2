<?php

use yii\db\Migration;

/**
 * Class m191028_184507_create_table_blog
 */
class m191028_184507_create_table_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'author' => $this->string(255),
            'date' => $this->dateTime()->notNull(),
            'content' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191028_184507_create_table_blog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191028_184507_create_table_blog cannot be reverted.\n";

        return false;
    }
    */
}
