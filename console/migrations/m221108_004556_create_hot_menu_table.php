<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hot_menu}}`.
 */
class m221108_004556_create_hot_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hot_menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'dishes' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hot_menu}}');
    }
}
