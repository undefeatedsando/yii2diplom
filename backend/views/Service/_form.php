<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Расчет проектов' => 'Расчет проектов', 'Поставщики' => 'Поставщики', 'Фабрики' => 'Фабрики', 'Налоговый учет' => 'Налоговый учет', 'Интеллектуальная собственность' => 'Интеллектуальная собственность', 'Заключение договоров' => 'Заключение договоров', 'Справки и выписки' => 'Справки и выписки', 'Организация мероприятий' => 'Организация мероприятий', 'Льготы и субсидии' => 'Льготы и субсидии', 'Привлечение инвестиций' => 'Привлечение инвестиций', 'Реклама и продвижение' => 'Реклама и продвижение', 'Поддержка международного бизнеса' => 'Поддержка международного бизнеса', 'Экспертиза, оценка, сертификация' => 'Экспертиза, оценка, сертификация', 'Подготовка кадров' => 'Подготовка кадров', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'header')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'option')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'promocode')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'phone')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
