<?php

use yii\db\Migration;

/**
 * Class m191203_103800_create_table_money
 */
class m191203_103800_create_table_money extends Migration
{



    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%money}}', [
'id' => $this->primaryKey(),
'username' => $this->string()->notNull(),
'money' => $this->string()->notNull(),
'total' => $this->integer()->defaultValue(0),
'timers' => $this->timestamp(),
], $tableOptions);
}

    public function down()
    {
        echo "m191203_103800_create_table_money cannot be reverted.\n";
        $this->dropTable('{{%money}}');
        return false;
    }

}
