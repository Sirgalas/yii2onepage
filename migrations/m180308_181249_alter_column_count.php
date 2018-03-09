<?php

use yii\db\Migration;

/**
 * Class m180308_181249_alter_column_count
 */
class m180308_181249_alter_column_count extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('config','count',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('config','count');
    }

}
