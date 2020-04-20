<?php

use yii\db\Migration;

/**
 * Class m200419_122030_people_table
 */
class m200419_122030_people_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'people', [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'age' => $this->integer()->notNull()->defaultValue(0),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200419_122030_people_table cannot be reverted.\n";
        $this->dropTable('people');
        return false;
    }
}
