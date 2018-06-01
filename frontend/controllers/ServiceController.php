<?php
/* @var $arrMember frontend\models\Service */
/* @var $model_arr_member frontend\models\Service */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Service;

class ServiceController extends UserController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $condition = $this->pushOptionsArray($request->post());
            foreach ($condition as $key => $temp){
                $condition[$key] = str_replace("_", " ", $temp);
            }
            //echo var_dump($condition);
            $params =  $this->getAllServices($condition);
            return $this->preparedPage($params);
        }
        else{
            $params = [];
            return $this->preparedPage($params);
        }
        
    }
    
    protected function getAllServices($condition){
        $result = Service::find()->where(['type' => $condition])->all();
        return $this->arrayOfArrays($result);
    }

    protected function concatObj($arr){
        $str = "";
        foreach ($arr as $arrMember){
            $str.= strval($arrMember);
            $str.= " ";
        }
        return $str;
    }
    
    protected function arrayOfArrays($model_arr){
        $arr = [];
        foreach ($model_arr as $model_arr_member){
            //$model_arr_member = Service::findOne(5);
            $temp_arr = [
                'type' => $model_arr_member->type,
                'header' => $model_arr_member->header,
                'option' => $model_arr_member->option,
                'promo' => $model_arr_member->promocode,
                'phone' => $model_arr_member->phone,
                'address' => $model_arr_member->address,
                'full' => true,
        ];
        array_push($arr, $temp_arr);
        }
        return $arr;
    }
}
