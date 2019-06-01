<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_client".
 *
 * @property string $invoice_id
 * @property string $contract_id
 * @property int $client_id
 * @property double $nominal
 * @property string $invoice_address
 * @property string $invoice_name
 * @property string $invoice_email
 * @property string $due_date
 * @property string $invoice_phone
 * @property string $create_date
 * @property string $create_by
 * @property int $status
 * @property int $urutan
 */
class TagihanClient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'contract_id', 'client_id', 'nominal', 'invoice_address', 'invoice_name', 'invoice_email', 'due_date', 'invoice_phone', 'create_date', 'create_by', 'status'], 'required'],
            [['client_id', 'status'], 'integer'],
            [['nominal'], 'number'],
            [['invoice_address'], 'string'],
            [['due_date', 'create_date'], 'safe'],
            [['invoice_id'], 'string', 'max' => 20],
            [['contract_id', 'invoice_name', 'invoice_email', 'invoice_phone', 'create_by'], 'string', 'max' => 50],
            [['invoice_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'invoice_id' => 'Invoice ID',
            'contract_id' => 'Contract ID',
            'client_id' => 'Client ID',
            'nominal' => 'Nominal',
            'invoice_address' => 'Invoice Address',
            'invoice_name' => 'Invoice Name',
            'invoice_email' => 'Invoice Email',
            'due_date' => 'Due Date',
            'invoice_phone' => 'Invoice Phone',
            'create_date' => 'Create Date',
            'create_by' => 'Create By',
            'status' => 'Status',
            'urutan' => 'Urutan',
        ];
    }
}
