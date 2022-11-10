<?php

use yii\db\Migration;

/**
 * Class m221108_025718_update_dish_table
 */
class m221108_025718_update_dish_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('dish', 'menu_id', $this->integer());
        $this->createIndex(
            '{{%idx-dish-menu_id}}',
            '{{%dish}}',
            'menu_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-dish-menu_id}}',
            '{{%dish}}',
            'menu_id',
            '{{%hot_menu}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221108_025718_update_dish_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221108_025718_update_dish_table cannot be reverted.\n";

        return false;
    }
    */
}
