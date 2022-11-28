<?php

use yii\db\Migration;

/**
 * Class m221128_081440_add_user_admin
 */
class m221128_081440_add_user_admin extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
{
    try {
        $this->addColumn('{{%user}}', 'is_admin', $this->tinyInteger(1)->unsigned()->notNull()->defaultValue(0));
    } catch (\Exception $e) {}

    $this->upsert('{{%user}}', [
        'username' => 'admin',
        'email' => 'admin@example.com',
        'auth_key' => Yii::$app->security->generateRandomString(),
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'status' => 10,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
    ], false);
}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221128_081440_add_user_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221128_081440_add_user_admin cannot be reverted.\n";

        return false;
    }
    */
}
