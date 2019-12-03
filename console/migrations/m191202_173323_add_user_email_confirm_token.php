<?php

use yii\db\Migration;

/**
 * Class m191202_173323_add_user_email_confirm_token
 */
class m191202_173323_add_user_email_confirm_token extends Migration
{
    /**
     * {@inheritdoc}
     */



    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('{{%user}}', 'email_confirm_token', $this->string()->unique()->after('email'));
    }

    public function down()
    {
        echo "m191202_173323_add_user_email_confirm_token cannot be reverted.\n";
        $this->dropColumn('{{%user}}', 'email_confirm_token');
        return false;
    }

}
