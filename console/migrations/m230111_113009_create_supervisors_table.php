<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%supervisors}}`.
 */
class m230111_113009_create_supervisors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%supervisors}}', [
            'id' => $this->primaryKey(),
            'job_title' => $this->string(),
            'full_name' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'position' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%supervisors}}');
    }
}
