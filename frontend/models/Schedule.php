<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $contract_id
 * @property int $event_id
 * @property string $date_period
 * @property string $time_period
 * @property int $limit
 * @property int $status
 * @property string $created_date
 * @property string $created_by
 * @property int $urutan
 *
 * @property ScheduleDetail[] $scheduleDetails
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_id', 'event_id', 'date_period', 'time_period', 'limit', 'status', 'created_date', 'created_by', 'urutan'], 'required'],
            [['contract_id', 'event_id', 'limit', 'status', 'urutan'], 'integer'],
            [['date_period', 'created_date'], 'safe'],
            [['time_period', 'created_by'], 'string', 'max' => 50],
            [['urutan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contract_id' => 'Contract ID',
            'event_id' => 'Event ID',
            'date_period' => 'Date Period',
            'time_period' => 'Time Period',
            'limit' => 'Limit',
            'status' => 'Status',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'urutan' => 'Urutan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::className(), ['schedule_id' => 'urutan']);
    }
}
