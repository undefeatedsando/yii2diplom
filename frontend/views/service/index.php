<?php

/* @var $this yii\frontend\web\View */
/* @var $model frontend\models\Userdata */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\widgets\StatusWidget;
use frontend\widgets\couponWidget;
use frontend\widgets\serviceMenuWidget;

?>

    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web');?>/css/services.css">
  
  <section id="status">
      <?= StatusWidget::widget(
        [
		'avatar' => $model->avatar,
		'name' => $model->name,
		'family_name' => $model->family_name,
		'city' => $model->city,
		'active' => 'service',
        ]
              )?>
  </section>
  <section id="content">
    <div class="wrapper">   
    <div class="checkboxes">
    <div class="left-button">
           <input type="submit" class="button__yellow" value="Открыть базу 1С" onclick='location ="https://<?= $model->url_1c_base?> ";'>
    </div>
       <?= serviceMenuWidget::widget() ?>
            </div>

    <div class="result">
        <?php foreach ($params as $service){
            echo couponWidget::widget($service);
        }
?>

    </div>     
   </div>
  </section>
