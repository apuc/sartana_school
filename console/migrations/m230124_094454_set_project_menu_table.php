<?php

use yii\db\Migration;

/**
 * Class m230124_094454_set_project_menu_table
 */
class m230124_094454_set_project_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('menu',array(
            'title'=>'Проект "Школа Минпросвещения России: шаги в будущее"',
            'text' =>'Контент',
            'page' =>'project',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230124_094454_set_project_menu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230124_094454_set_project_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
