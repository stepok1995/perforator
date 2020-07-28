<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timage".
 *
 * @property int $id
 * @property string $image
 * @property int $id_user
 */
class Timage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код картинки',
            'image' => 'Путь к картинке',
            'id_user' => 'Код специалиста выложившего картинку',
        ];
    }
}
