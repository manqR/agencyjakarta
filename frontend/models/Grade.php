<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property string $grade_code
 * @property string $grade
 * @property int $flag
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_code'], 'required'],
            [['flag'], 'integer'],
            [['grade_code', 'grade'], 'string', 'max' => 5],
            [['grade_code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_code' => 'Grade Code',
            'grade' => 'Grade',
            'flag' => 'Flag',
        ];
    }
}
