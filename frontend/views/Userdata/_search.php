<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\forms\UserdataFormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userdata-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'family_name') ?>

    <?= $form->field($model, 'father_name') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'about') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'subscribeEnd') ?>

    <?php // echo $form->field($model, 'url_1c_base') ?>

    <?php // echo $form->field($model, 'carousel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
