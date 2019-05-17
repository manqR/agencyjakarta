<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $event_id
 * @property string $contract_id
 * @property string $event_name
 * @property string $grade_spg
 * @property string $img_event
 * @property string $description
 * @property double $price
 * @property int $status
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
            [['contract_id', 'event_name', 'grade_spg', 'img_event', 'description', 'price', 'status'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['contract_id'], 'string', 'max' => 20],
            [['event_name'], 'string', 'max' => 255],
            [['grade_spg'], 'string', 'max' => 5],
            [['img_event'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'contract_id' => 'Contract ID',
            'event_name' => 'Event Name',
            'grade_spg' => 'Grade Spg',
            'img_event' => 'Img Event',
            'description' => 'Description',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }
}
