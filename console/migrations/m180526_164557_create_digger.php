<?php

use yii\db\Migration;

/**
 * Class m180526_164557_create_digger
 */
class m180526_164557_create_digger extends Migration
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
        echo "m180526_164557_create_digger cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('digger', [
            'id' => $this->primaryKey(),
            'bit_price' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('digger');
    }

}
