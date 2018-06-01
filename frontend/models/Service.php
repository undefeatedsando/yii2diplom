<?php

namespace frontend\models;

use Yii;
use frontend\models\ServiceNameTranslation;

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
            'type' => 'Type',
            'header' => 'Header',
            'option' => 'Option',
            'promocode' => 'Promocode',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
    
    public function nameTranslation($param){
        return ServiceNameTranslation::translateRusToLat($param);
    }
    
    public function __toString(){
        return $this->id . " " . $this->nameTranslation($this->type) . " " . $this->header . " " . $this->option . " " . $this->promocode . " " . $this->phone . " " . $this->address;
    }
}
