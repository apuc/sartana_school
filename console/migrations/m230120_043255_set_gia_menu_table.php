<?php

use yii\db\Migration;

/**
 * Class m230120_043255_set_gia_menu_table
 */
class m230120_043255_set_gia_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('menu',array(
            'title'=>'Государственная итоговая аттестация (ГИА) - 2023:',
            'text' =>'Контент',
            'page' =>'gia',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230120_043255_set_gia_menu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230120_043255_set_gia_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
