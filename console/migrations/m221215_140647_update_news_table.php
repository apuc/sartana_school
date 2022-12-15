<?php

use yii\db\Migration;

/**
 * Class m221215_140647_update_news_table
 */
class m221215_140647_update_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->addColumn('news', 'preview', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221215_140647_update_news_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221215_140647_update_news_table cannot be reverted.\n";

        return false;
    }
    */
}
