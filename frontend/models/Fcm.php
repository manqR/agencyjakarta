<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fcm".
 *
 * @property string $token
 * @property string $deviceId
 * @property int $urutan
 */
class Fcm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fcm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['token'], 'string', 'max' => 255],
            [['deviceId'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'token' => 'Token',
            'deviceId' => 'Device ID',
            'urutan' => 'Urutan',
        ];
    }
}
