<?php

namespace app\models;

use Yii;


use common\models\User;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $tags
 * @property integer $group
 * @property integer $kategori
 * @property integer $user_id
 * @property string $date_publish
 * @property string $published
 *
 * @property User $user
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'date_publish'], 'required'],
            [['content', 'published'], 'string'],
            [['group', 'kategori', 'user_id'], 'integer'],
            [['date_publish'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['tags'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'tags' => 'Tags',
            'group' => 'Group',
            'kategori' => 'Kategori',
            'user_id' => 'User ID',
            'date_publish' => 'Date Publish',
            'published' => 'Published',
			'author' => 'Penulis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
