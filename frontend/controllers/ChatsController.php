<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ChatsController extends UserController
{
    public function actionIndex()
    {
        return $this->preparedPage();
    }

}
