<?php

use yii\db\Migration;

/**
 * Handles the creation of table `application_tag`.
 */
class m180523_062046_create_application_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application_tag', [
            'id' => $this->primaryKey(),
            'application_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-application_tag-application_id',
            'application_tag', 'application_id');
        $this->addForeignKey(
            'fk-application_tag-application',
            'application_tag','application_id',
            'application','id'
        );

         $this->createIndex(
            'idx-application_tag-tag_id',
            'application_tag', 'tag_id');
          $this->addForeignKey(
            'fk-application_tag-tag',
            'application_tag','tag_id',
            'tag','id'
            );

    }

    
    public function safeDown()
    {
        $this->dropForeignKey('fk-application_tag-application','application_tag');
        $this->dropForeignKey('fk-application_tag-tag','application_tag');
        $this->dropIndex('idx-application_tag-application_id','application_tag');
        $this->dropIndex('idx-application_tag-tag_id','application_tag');
        $this->dropTable('application_tag');
    }
}

