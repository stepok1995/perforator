<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tskills".
 *
 * @property int $id
 * @property string $name
 * @property int|null $average_cost
 */
class Tskills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tskills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['average_cost'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Навык',
            'average_cost' => 'Средняя стоимость на рынке',
        ];
    }
}
