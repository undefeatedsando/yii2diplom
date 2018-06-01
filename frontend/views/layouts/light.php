<?php
/* @var $model frontend\models\Userdata */
use yii\helpers\Html;
use frontend\widgets\FooterWidgetNV;
use frontend\widgets\topMenuWidgetNV;
use frontend\assets\LightAsset;
LightAsset::register($this);

?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Ресурсный центр для дизайнеров</title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>

<section id="menu">
       <?= topMenuWidgetNV::widget()?>
  </section>


<?= $content ?>

    <section id="footer">  
      <?= FooterWidgetNV::widget() ?>
    </section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>