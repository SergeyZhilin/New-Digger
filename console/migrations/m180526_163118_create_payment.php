<?php

use yii\db\Migration;

/**
 * Class m180526_163118_create_payment
 */
class m180526_163118_create_payment extends Migration
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
        echo "m180526_163118_create_payment cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('payment_in', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'pay_in' => $this->integer()->notNull(),
            'time_pay_in' => $this->integer()->notNull(),
            'pay_out' => $this->integer()->notNull(),
            'time_pay_out' => $this->integer()->notNull(),
            'current_amount' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('payment_in');
    }

}
