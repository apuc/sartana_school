<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m221020_131938_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'date' => $this->integer(),
            'name' => $this->string(),
            'text' => $this->text(),
            'image' => $this->text(),
            'short_desc' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
