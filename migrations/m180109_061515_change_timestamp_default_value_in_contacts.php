<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180109_061515_change_timestamp_default_value_in_contacts
 */
class m180109_061515_change_timestamp_default_value_in_contacts extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropColumn('contacts', 'updated_at');
//        $this->addColumn('contacts', 'updated_at', $this->timestamp()->defaultValue('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        $this->addColumn('contacts', 'updated_at', Schema::TYPE_TIMESTAMP . " DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_061515_change_timestamp_default_value_in_contacts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_061515_change_timestamp_default_value_in_contacts cannot be reverted.\n";

        return false;
    }
    */
}
