<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\forms\UserdataForm */

$this->title = 'Create Userdata Form';
$this->params['breadcrumbs'][] = ['label' => 'Userdata Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
