<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\forms\UserdataForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Userdata Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <img src="<?= "../img/status/".$model->avatar?>">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'family_name',
            'father_name',
            'city',
            'website',
            'about',
            //'avatar',
            'subscribeEnd',
            'url_1c_base:url',
            'carousel',
        ],
    ]) ?>

</div>
