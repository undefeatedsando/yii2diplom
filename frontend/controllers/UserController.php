<?php

namespace frontend\controllers;

use Yii;
use frontend\models\UserData;
use yii\web\NotFoundHttpException;
/* @var $userModel frontend\models\UserData */
/* @var $model frontend\models\UserData */

class UserController extends \yii\web\Controller
{
    protected function preparedPage($params = "")
    {
        $this->layout = "light";
        $userModel = $this->findModel();
        $this->checkForm($userModel);
        return $this->render('index', ['model' => $userModel, 'params' => $params]);
    }
    
    protected function checkForm($model){
        $request = Yii::$app->request;
        if ($request->isPost) {
            if($request->post('field1')!=""){
                //we have profile request
                $this->updateUserdata($model, $request);
            }
            else{
                //we have service request
                //$this->refresh();
                //echo var_dump($this->pushOptionsArray($request->post()));
                
            }
//
        }
    }
    public function pushOptionsArray($post){
        $result = [];
        foreach($post as $option => $on){
            if($on == "on"){
                array_push($result, $option);
            }
        }
        return $result;
    }
    
    protected function updateUserdata($model, $request){
            $model->name = $request->post('field1');
            $model->father_name = $request->post('field2');
            $model->family_name = $request->post('field3');
            $model->website = $request->post('field4');
            $model->city = $request->post('field5');
            $model->about = $request->post('field6');
            if($_FILES['avatar']['name']!=""){
                $files = \yii\web\UploadedFile::getInstancesByName('avatar');
                $this->getFiles($model, $files);
            }
            $model->save();
            $this->refresh();
    }
    
    protected function getFiles($model, $files){
        foreach ($files as $file) {
                    $model->avatar = $model->id . '.' . $file->extension;
                    $file->saveAs('img/status/' . $model->id . '.' . $file->extension);
                }
    }
    
     protected function findModel()
    {
        if (($model = UserData::findOne(Yii::$app->user->id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
