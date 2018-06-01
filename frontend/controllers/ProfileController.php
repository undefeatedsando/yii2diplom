<?php

namespace frontend\controllers;

use Yii;
use frontend\models\UserData;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class ProfileController extends UserController
{
    public function actionIndex()
    {
        //$this->layout = "none";
        
        return $this->preparedPage();
        
        /*$this->layout = "light";
        $model = $this->findModel();
        $request = Yii::$app->request;

        if ($request->isPost) {
            $model->name = $request->post('field1');
            $model->father_name = $request->post('field2');
            $model->family_name = $request->post('field3');
            $model->website = $request->post('field4');
            $model->city = $request->post('field5');
            if($_FILES['avatar']['name']!=""){
                $files = \yii\web\UploadedFile::getInstancesByName('avatar');
                foreach ($files as $file) {
                    $model->avatar = $model->id . '.' . $file->extension;
                    $file->saveAs('img/status/' . $model->id . '.' . $file->extension);
                }   
            }
            
            $model->save();
            $this->refresh();
        }
        return $this->render('index', ['model' => $model]);*/
    }
    
 /*   public function Update()
    {
        $model = $this->findModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
*/
}
