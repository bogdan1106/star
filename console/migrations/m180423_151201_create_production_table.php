<?php

use yii\db\Migration;

/**
 * Handles the creation of table `production`.
 */
class m180423_151201_create_production_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('production', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('production');
    }
}
