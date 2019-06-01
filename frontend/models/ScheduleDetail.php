<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "schedule_detail".
 *
 * @property int $schedule_id
 * @property int $spg_id
 * @property int $urutan
 *
 * @property Schedule $schedule
 */
class ScheduleDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schedule_id', 'spg_id', 'urutan'], 'required'],
            [['schedule_id', 'spg_id', 'urutan'], 'integer'],
            [['urutan'], 'unique'],
            [['schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['schedule_id' => 'urutan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'schedule_id' => 'Schedule ID',
            'spg_id' => 'Spg ID',
            'urutan' => 'Urutan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['urutan' => 'schedule_id']);
    }
}
