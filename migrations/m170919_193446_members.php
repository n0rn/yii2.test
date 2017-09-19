<?php

use yii\db\Migration;

class m170919_193446_members extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170919_193446_members cannot be reverted.\n";

        return false;
    }

   
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('members', [
            'id' => $this->primaryKey(), 
            'name' => $this->string(),
            'email' => $this->string(), 
            'text' => $this->text(), 
            'time' => $this->dateTime(),
        ]);

    }

    public function down()
    {
        $this->dropTable('members');
    }
    
}
