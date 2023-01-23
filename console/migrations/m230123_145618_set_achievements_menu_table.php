<?php

use yii\db\Migration;

/**
 * Class m230123_145618_set_achievements_menu_table
 */
class m230123_145618_set_achievements_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('menu',array(
            'title'=>'Наши достижения',
            'text' =>'Контент',
            'page' =>'achievements',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230123_145618_set_achievements_menu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230123_145618_set_achievements_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
