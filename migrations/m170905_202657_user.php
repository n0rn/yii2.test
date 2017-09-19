<?php

use yii\db\Migration;

class m170905_202657_user extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170905_202657_user cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
     {
        $this->createTable('user', ['id' =>'pk', 'password' => 'string NOT NULL', 'email' => 'string NOT NULL']);

    }

    public function down()
    {
        $this->dropTable('user');

        return false;
    }
    
}
