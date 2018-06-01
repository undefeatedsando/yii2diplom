<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;

class ImageForm extends Model
{

    public $picture;

    public function rules()
    {
        return [
            [['picture'], 'file',
                'extensions' => ['jpg'],
                'checkExtensionByMimeType' => true
            ],
        ];
    }
    public function upload(){
        if($this->validate()){
        $this->image->saveAs("uploads/{$this->image->baseName}.{$this->image->extension}");
        }else{
        return false;
        }
    }
}
?>