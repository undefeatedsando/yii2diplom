<?php

namespace frontend\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "none";
        return $this->render('index');
    }

}
