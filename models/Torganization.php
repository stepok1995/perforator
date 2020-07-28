<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torganization".
 *
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property string $adress
 */
class Torganization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'torganization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone_number', 'adress'], 'required'],
            [['name', 'phone_number', 'adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код организации',
            'name' => 'Название',
            'phone_number' => 'Номер телефона',
            'adress' => 'Адрес',
        ];
    }
}
