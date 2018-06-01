<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\forms\UserdataForm */

$this->title = 'Update Userdata Form: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Userdata Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userdata-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
