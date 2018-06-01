<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\forms\UserdataFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userdata Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userdata Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'family_name',
            //'father_name',
            'city',
            //'website',
            //'about',
            //'avatar',
            'subscribeEnd',
            //'url_1c_base:url',
            //'carousel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
