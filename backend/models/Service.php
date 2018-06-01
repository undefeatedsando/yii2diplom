<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $type
 * @property string $header
 * @property string $option
 * @property string $promocode
 * @property string $phone
 * @property string $address
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'header', 'option', 'promocode', 'phone', 'address'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип',
            'header' => 'Название фирмы',
            'option' => 'Бонус',
            'promocode' => 'Промокод (с заглавной, без кавычек)',
            'phone' => 'Конактный телефон',
            'address' => 'Адрес',
        ];
    }
}
