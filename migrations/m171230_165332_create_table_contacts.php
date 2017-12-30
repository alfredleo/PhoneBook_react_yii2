<?php

use yii\db\Migration;

/**
 * Class m171230_165332_create_table_contacts
 */
class m171230_165332_create_table_contacts extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'phone_number' => $this->string(),
            'abonent_name' => $this->string(),
            'abonent_address' => $this->string(),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_165332_create_table_contacts cannot be reverted.\n";

        return false;
    }
    */
}
