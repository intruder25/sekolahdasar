<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $eventName
 * @property string $url
 * @property string $startTime
 * @property string $endTime
 * @property integer $active
 * @property integer $level
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startTime', 'endTime'], 'safe'],
            [['active'], 'integer'],
            [['eventName','eventColor'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eventName' => 'Event Name',
            'url' => 'Url',
            'startTime' => 'Date Start',
            'endTime' => 'Date End',
            'active' => 'Active',
            'eventColor' => 'Event Color',
        ];
    }
	
	public function findByCalendar($from,$to,$browser_timezone){
		self::findAll(['startTime' => $from, 'endTime' => $to]);
	}
}
