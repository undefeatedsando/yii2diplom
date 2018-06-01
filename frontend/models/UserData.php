<?php
namespace frontend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
class UserData extends ActiveRecord
{
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%userdata}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    
    public function addition() {
        //$current_user = \Yii::$app->user->identity->id;;
        //$current_user_data = static::findOne($current_user);
        return " SANDO WAS THERE!";
        //$current_user_data->name;//
    }
}
