<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%educational_work}}`.
 */
class m230302_103957_create_educational_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%educational_work}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'link' => $this->string(),
            'image' => $this->string(),
            'video' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%educational_work}}');
    }
}
