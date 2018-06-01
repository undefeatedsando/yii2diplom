<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property int $id
 * @property string $name
 * @property string $family_name
 * @property string $father_name
 * @property string $city
 * @property string $website
 * @property string $about
 * @property string $avatar
 * @property string $subscribeEnd
 * @property string $url_1c_base
 * @property int $carousel
 */
class Userdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about'], 'string'],
            [['subscribeEnd'], 'safe'],
            [['carousel'], 'integer'],
            [['name', 'family_name', 'father_name', 'city', 'avatar', 'url_1c_base'], 'string', 'max' => 32],
            [['website'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'family_name' => 'Фамилия',
            'father_name' => 'Отчество',
            'city' => 'Город',
            'website' => 'Веб-сайт',
            'about' => 'Обо мне',
            'avatar' => 'Аватар',
            'subscribeEnd' => 'Окончание подписки',
            'url_1c_base' => 'Ссылка на базу 1С',
            'carousel' => 'Присутствие в карусели',
        ];
    }
}
