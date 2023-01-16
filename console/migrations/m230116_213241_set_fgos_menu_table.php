<?php

use yii\db\Migration;

/**
 * Class m230116_213241_set_fgos_menu_table
 */
class m230116_213241_set_fgos_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('menu',array(
            'title'=>'Внедряем ФГОС:',
            'text' =>'Контент',
            'page' =>'fgos',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230116_213241_set_fgos_menu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230116_213241_set_fgos_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
