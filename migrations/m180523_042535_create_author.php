<?php

use yii\db\Migration;

/**
 * Class m180523_042535_create_application
 */
class m180523_042535_create_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->String(191)->notNull(),
            'web' => $this->String(191)->notNull(),
            'born'=> $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}

