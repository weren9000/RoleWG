<?php

use yii\db\Migration;

/**
 * Class m191202_130341_add_user_email_confirm_token
 */
class m191202_130341_add_user_email_confirm_token extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'email_confirm_token', $this->string()->unique()->after('email'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191202_130341_add_user_email_confirm_token cannot be reverted.\n";
        $this->dropColumn('{{%user}}', 'email_confirm_token');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_130341_add_user_email_confirm_token cannot be reverted.\n";

        return false;
    }
    */
}
