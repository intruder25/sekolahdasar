<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $description
 * @property string $keyword
 * @property string $thumb_img
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['description', 'keyword', 'thumb_img'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'description' => 'Description',
            'keyword' => 'Keyword',
            'thumb_img' => 'Thumb Img',
        ];
    }
}
