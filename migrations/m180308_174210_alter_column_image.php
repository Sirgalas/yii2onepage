<?php

use yii\db\Migration;

/**
 * Class m180308_174210_alter_column_image
 */
class m180308_174210_alter_column_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('config','image',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('config','image');
    }
}
