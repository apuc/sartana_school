<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%answers}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%feedback}}`
 */
class m221108_093012_create_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%answers}}', [
            'id' => $this->primaryKey(),
            'feedback_id' => $this->integer()->notNull(),
            'answer' => $this->text(),
        ]);

        // creates index for column `feedback_id`
        $this->createIndex(
            '{{%idx-answers-feedback_id}}',
            '{{%answers}}',
            'feedback_id'
        );

        // add foreign key for table `{{%feedback}}`
        $this->addForeignKey(
            '{{%fk-answers-feedback_id}}',
            '{{%answers}}',
            'feedback_id',
            '{{%feedback}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%feedback}}`
        $this->dropForeignKey(
            '{{%fk-answers-feedback_id}}',
            '{{%answers}}'
        );

        // drops index for column `feedback_id`
        $this->dropIndex(
            '{{%idx-answers-feedback_id}}',
            '{{%answers}}'
        );

        $this->dropTable('{{%answers}}');
    }
}
