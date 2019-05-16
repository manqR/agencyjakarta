<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spg".
 *
 * @property int $id
 * @property string $city
 * @property string $bank_account
 * @property string $account_number
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $description
 * @property string $ktp
 * @property string $bod
 * @property int $high
 * @property int $weight
 * @property string $language
 * @property string $face
 * @property int $verified
 * @property string $auth_key
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property int $active_work
 * @property int $status
 */
class Spg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'auth_key', 'created_at', 'status'], 'required'],
            [['bod', 'created_at', 'updated_at'], 'safe'],
            [['high', 'weight', 'verified', 'active_work', 'status'], 'integer'],
            [['city', 'bank_account', 'account_number', 'first_name', 'ktp', 'language', 'face'], 'string', 'max' => 50],
            [['username', 'email', 'address','deviceId', 'description', 'password'], 'string', 'max' => 255],
            [['last_name'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'bank_account' => 'Bank Account',
            'account_number' => 'Account Number',
            'username' => 'Username',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
            'description' => 'Description',
            'ktp' => 'Ktp',
            'bod' => 'Bod',
            'high' => 'High',
            'weight' => 'Weight',
            'language' => 'Language',
            'face' => 'Face',
            'verified' => 'Verified',
			'deviceId' => 'Device Id',
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'active_work' => 'Active Work',
            'status' => 'Status',
        ];
    }
}
