<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $idclient
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $company_name
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property string $city
 * @property string $created_date
 * @property int $flag
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'company_name', 'phone_number', 'flag'], 'required'],
            [['address'], 'string'],
            [['created_date'], 'safe'],
            [['flag'], 'integer'],
            [['name', 'username', 'password', 'company_name', 'phone_number', 'email', 'city'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idclient' => 'Idclient',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'company_name' => 'Company Name',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'city' => 'City',
            'created_date' => 'Created Date',
            'flag' => 'Flag',
        ];
    }
}
