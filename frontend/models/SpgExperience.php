<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spg_experience".
 *
 * @property int $idexperience
 * @property string $username
 * @property string $logo
 * @property string $title
 * @property string $company
 * @property string $start_date
 * @property string $end_date
 * @property int $delete_status
 */
class SpgExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spg_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'title', 'start_date'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['delete_status'], 'integer'],
            [['username', 'logo', 'title', 'company'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idexperience' => 'Idexperience',
            'username' => 'Username',
            'logo' => 'Logo',
            'title' => 'Title',
            'company' => 'Company',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'delete_status' => 'Delete Status',
        ];
    }
}
