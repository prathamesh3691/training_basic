<?php

use yii\db\Migration;

/**
 * Class m230726_072605_add_department_table
 */
class m230726_072605_add_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("department", [
            "id" => Schema::TYPE_PK,
            "dept_name" => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230726_072605_add_department_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230726_072605_add_department_table cannot be reverted.\n";

        return false;
    }
    */
}
