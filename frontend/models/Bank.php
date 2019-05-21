<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property int $idbank
 * @property string $bank
 * @property int $flag
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank', 'flag'], 'required'],
            [['flag'], 'integer'],
            [['bank'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbank' => 'Idbank',
            'bank' => 'Bank',
            'flag' => 'Flag',
        ];
    }
}
