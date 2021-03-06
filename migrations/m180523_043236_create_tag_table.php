<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tag`.
 */
class m180523_043236_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tag');
    }
}
