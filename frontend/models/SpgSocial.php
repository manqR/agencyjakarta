<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spg_social".
 *
 * @property int $idsocial
 * @property string $username
 * @property string $icons
 * @property string $link
 * @property int $flag
 */
class SpgSocial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spg_social';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'icons', 'link', 'flag'], 'required'],
            [['flag'], 'integer'],
            [['username', 'icons', 'link'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsocial' => 'Idsocial',
            'username' => 'Username',
            'icons' => 'Icons',
            'link' => 'Link',
            'flag' => 'Flag',
        ];
    }
}
