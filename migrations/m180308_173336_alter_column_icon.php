<?php

use yii\db\Migration;

/**
 * Class m180308_173336_alter_column_icon
 */
class m180308_173336_alter_column_icon extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('config','icon',$this->string(100));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('config','icon');
    }
    
}
