<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\forms\UserdataForm */
/* @var $form ActiveForm */

$model->subscribeEnd = strtotime("tomorrow");
?>
<div class="site-UserdataForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= Html::encode($model->subscribeEnd)?>
        <?= $form->field($model, 'carousel') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'family_name') ?>
        <?= $form->field($model, 'father_name') ?>
        <?= $form->field($model, 'city') ?>
        <?= $form->field($model, 'avatar') ?>
        <?= $form->field($model, 'url_1c_base') ?>
        <?= $form->field($model, 'website') ?>
        <?= $form->field($model, 'about') ?>
        <?= Html::encode($model->name)?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-UserdataForm -->
