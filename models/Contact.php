<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $phone_number
 * @property string $abonent_name
 * @property string $abonent_address
 * @property string $updated_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updated_at'], 'safe'],
            [['phone_number', 'abonent_name', 'abonent_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Phone Number',
            'abonent_name' => 'Abonent Name',
            'abonent_address' => 'Abonent Address',
            'updated_at' => 'Updated At',
        ];
    }
}
