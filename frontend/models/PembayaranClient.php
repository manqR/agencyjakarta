<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pembayaran_client".
 *
 * @property string $payment_number
 * @property string $invoice_id
 * @property string $payment_menthod
 * @property string $bank_name
 * @property string $account_name
 * @property string $payment_date
 * @property string $prove_file
 * @property double $nominal
 * @property string $create_date
 * @property string $create_by
 * @property int $status
 * @property int $urutan
 */


class PembayaranClient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran_client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_number', 'invoice_id', 'payment_menthod', 'payment_date', 'nominal', 'create_date', 'create_by', 'status'], 'required'],
            [['payment_date', 'create_date'], 'safe'],            
            [['status'], 'integer'],
            [['payment_number', 'invoice_id'], 'string', 'max' => 20],
            [['payment_menthod', 'bank_name', 'account_name', 'prove_file', 'create_by'], 'string', 'max' => 50],
            [['payment_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_number' => 'Payment Number',
            'invoice_id' => 'Invoice ID',
            'payment_menthod' => 'Payment Menthod',
            'bank_name' => 'Bank Name',
            'account_name' => 'Account Name',
            'payment_date' => 'Payment Date',
            'prove_file' => 'Prove File',
            'nominal' => 'Nominal',
            'create_date' => 'Create Date',
            'create_by' => 'Create By',
            'status' => 'Status',
            'urutan' => 'Urutan',
        ];
    }
}
