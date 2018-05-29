<?php

use yii\db\Migration;

/**
 * Class m180414_111929_create_table_chemodan
 */
class m180414_111929_create_table_chemodan extends Migration
{


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('chemodan',[
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->string(),
            'city' => $this->string(),
            'hiring_date' => $this->date(),
            'position' => $this->string(),
            'department' => $this->string(),
            'id_code' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('chemodan');
    }

}
