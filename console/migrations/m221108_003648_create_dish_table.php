<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dish}}`.
 */
class m221108_003648_create_dish_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dish}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'amount' => $this->string(),
            'is_diet' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dish}}');
    }
}
