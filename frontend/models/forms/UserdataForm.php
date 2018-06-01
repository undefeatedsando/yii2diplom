<?php

namespace frontend\models\forms;

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
class UserdataForm extends \yii\db\ActiveRecord
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
            [['subscribeEnd','id'], 'safe'],
            [['carousel'], 'integer'],
            [['name', 'family_name', 'father_name', 'city', 'avatar', 'url_1c_base'], 'string', 'max' => 32],
            [['website'], 'string', 'max' => 128],
            [['about'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'Имя',
            'family_name' => 'Фамилия',
            'father_name' => 'Отчество',
            'city' => 'Город',
            'website' => 'Веб-сайт',
            'about' => 'О себе',
            'avatar' => 'Avatar',
            'subscribeEnd' => 'Subscribe End',
            'url_1c_base' => '1c Base',
            'carousel' => 'Carousel',
        ];
    }
}
