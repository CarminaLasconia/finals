<?php

use yii\db\Migration;

/**
 * Handles the creation of table `application`.
 */
class m180523_061600_create_application_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'title' => $this->string(30)->notNull(),
            'web' => $this->string(191),
            'slogan' => $this->string(191),
        ]);
        $this->createIndex(
            'idx-application-author_id',
            'application', 'author_id');
        $this->addForeignKey(
            'fk-application-author',
            'application','author_id',
            'author','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-application-author','application');
        $this->dropIndex('idx-application-author_id','application');
        $this->dropTable('application');
    }
}

