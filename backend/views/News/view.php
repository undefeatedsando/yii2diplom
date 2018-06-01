<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\widgets\newsWidget;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img_src = Yii::getAlias('@web') . "/../../frontend/web/img/news/" . $model->image;//Yii::getAlias('@web');?>
    <?php if ($model->display){ ?>
        <?= newsWidget::widget([
                'img' => $img_src,
                'header' => $model->title,
                'text' => $model->text
                ])?>
    <?php } ?>     
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'text',
            //'image',
            'date',
            'display',
        ],
    ]) ?>

</div>
