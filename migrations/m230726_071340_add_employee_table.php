<?php

use yii\db\Migration;

/**
 * Class m230726_071340_add_employee_table
 */
class m230726_071340_add_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("news", [
            "id" => Schema::TYPE_PK,
            "title" => Schema::TYPE_STRING,
            "content" => Schema::TYPE_TEXT,
         ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230726_071340_add_employee_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230726_071340_add_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
