<?php

namespace app\models;

use Yii;
use borales\extensions\phoneInput\PhoneInputValidator;

/**
 * This is the model class for table "tuser".
 *
 * @property int $id
 * @property string $family
 * @property string $name
 * @property string|null $second_name
 * @property string $login
 * @property string $password
 * @property string|null $text
 * @property string|null $phone_nubmber
 * @property string|null $education
 * @property int $role_id
 * @property int|null $status_id
 * @property string|null $avatar
 */
class Tuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['family', 'name', 'login', 'password', 'role_id'], 'required'],
            [['text'], 'string'],
            [['role_id', 'status_id'], 'integer'],
            [['family', 'name', 'second_name', 'login', 'password', 'phone_nubmber', 'education', 'avatar'], 'string', 'max' => 255],
            [['phone_number'], PhoneInputValidator:: className()],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'family' => 'Фамилия',
            'name' => 'Имя',
            'second_name' => 'Отчество',
            'login' => 'Логин',
            'password' => 'Пароль',
            'text' => 'Текст',
            'phone_nubmber' => 'Номер телефона',
            'education' => 'Образование',
            'role_id' => 'Роль пользователя',
            'status_id' => 'Статус пользователя',
            'avatar' => 'Путь к аватарке',
        ];
    }
}
