<?php

use yii\db\Migration;

/**
 * Handles the creation of table `config`.
 */
class m180308_062801_create_config_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('config', [
            'id' => $this->primaryKey(),
            'params' => $this->string(255),
            'text' => $this->string(),
            'description' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('config');
    }
}
