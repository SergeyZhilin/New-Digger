<?php

use yii\db\Migration;

/**
 * Class m180526_164422_create_payment_out
 */
class m180526_164422_create_payment_out extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180526_164422_create_payment_out cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('payment_out', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'pay_out' => $this->integer()->notNull(),
            'time_pay_out' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('payment_out');
    }
}
