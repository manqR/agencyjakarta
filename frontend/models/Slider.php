<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $idslider
 * @property string $slider_name
 * @property string $slider_image
 * @property int $flag
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['flag'], 'required'],
            [['flag'], 'integer'],
            [['slider_name', 'slider_image'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idslider' => 'Idslider',
            'slider_name' => 'Slider Name',
            'slider_image' => 'Slider Image',
            'flag' => 'Flag',
        ];
    }
}
