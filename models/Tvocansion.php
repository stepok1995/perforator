<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tvocansion".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $money
 * @property string $date
 */
class Tvocansion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tvocansion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'money', 'date'], 'required'],
            [['text'], 'string'],
            [['money'], 'integer'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'money' => 'Зарплата',
            'date' => 'Дата',
        ];
    }
}
