<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%docs}}`.
 */
class m221024_112711_create_docs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%docs}}', [
            'id' => $this->primaryKey(),
            'doc' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%docs}}');
    }
}
