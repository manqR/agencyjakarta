<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property string $contract_id
 * @property int $idclient
 * @property string $pic_name
 * @property string $pic_phone
 * @property string $pic_email
 * @property string $start_date
 * @property string $end_date
 * @property int $number_of_spg
 * @property string $description
 * @property int $contract_status
 * @property int $payment_status
 * @property string $upload_file
 * @property string $created_date
 * @property string $created_by
 * @property string $update_date
 * @property string $update_by
 * @property int $urutan
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contract_id', 'idclient', 'pic_name', 'pic_phone', 'start_date', 'number_of_spg', 'contract_status', 'payment_status', 'created_date', 'created_by'], 'required'],
            [['idclient', 'number_of_spg', 'contract_status', 'payment_status'], 'integer'],
            [['start_date', 'end_date', 'created_date', 'update_date'], 'safe'],
            [['description'], 'string'],
            [['pic_email'], 'email'],
            [['contract_id', 'pic_phone'], 'string', 'max' => 20],
            [['pic_name', 'pic_email', 'upload_file', 'created_by', 'update_by'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contract_id' => 'Contract ID',
            'idclient' => 'Idclient',
            'pic_name' => 'Pic Name',
            'pic_phone' => 'Pic Phone',
            'pic_email' => 'Pic Email',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'number_of_spg' => 'Number Of Spg',
            'description' => 'Description',
            'contract_status' => 'Contract Status',
            'payment_status' => 'Payment Status',
            'upload_file' => 'Upload File',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'update_date' => 'Update Date',
            'update_by' => 'Update By',
            'urutan' => 'Urutan',
        ];
    }
}
