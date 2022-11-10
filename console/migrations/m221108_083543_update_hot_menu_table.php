<?php

use yii\db\Migration;

/**
 * Class m221108_083543_update_hot_menu_table
 */
class m221108_083543_update_hot_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    $this->addColumn('hot_menu', 'image', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221108_083543_update_hot_menu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221108_083543_update_hot_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
