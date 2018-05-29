<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m180416_162951_create_city_table extends Migration
{

    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(),
        ]);
    }

   public function down()
    {
        $this->dropTable('city');
    }
}
