<?php

/* @var $this yii\frontend\web\View */
/* @var $model frontend\models\Userdata */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\widgets\StatusWidget;
use frontend\assets\ChatAsset;

ChatAsset::register($this);
?>

    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web');?>/css/chats.css">
  
  <section id="status">
      <?= StatusWidget::widget(
        [
		'avatar' => $model->avatar,
		'name' => $model->name,
		'family_name' => $model->family_name,
		'city' => $model->city,
		'active' => 'chats',
        ]
              )?>
  </section>
  <section id="content">
     <div class="chat-content">
       
       <div class="chat">
        <div class="chat-card">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">бухгалтером</div>
          </div>
        </div>
        <div class="chat-card">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">кадровиком</div>
          </div>
        </div>
        <div class="chat-card">
          <div class="chat-card__icon"></div>
          <div class="chat-card__description">Связаться с
            <div class="chat-card__description__specialist">юристом</div>
          </div>
        </div>
        <div class="chat-close-button" onclick=' clearTawk();active.removeClass("active");'>Закрыть активный чат</div>
      </div>
      <div class="active-chat"><div id='tawk_5a4df77fd7591465c7067ea2'></div>
    <div id='tawk_5af99b2b227d3d7edc25458f'></div></div>
     </div>
  </section>
  <script>var global_visitor = "<?= $model->name." ".$model->family_name?>";</script>