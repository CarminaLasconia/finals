<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $web
 * @property string $slogan
 *
 * @property Author $author
 * @property ApplicationTag[] $applicationTags
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 30],
            [['web', 'slogan'], 'string', 'max' => 191],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'title' => 'Title',
            'web' => 'Web',
            'slogan' => 'Slogan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicationTags()
    {
        return $this->hasMany(ApplicationTag::className(), ['application_id' => 'id']);
    }
}
