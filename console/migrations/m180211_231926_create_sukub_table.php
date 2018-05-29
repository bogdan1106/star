<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sukub`.
 */
class m180211_231926_create_sukub_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sukub', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'data' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sukub');
    }
}
