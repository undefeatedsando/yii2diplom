<?php

/* @var $this yii\frontend\web\View */
/* @var $model frontend\models\Userdata */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\widgets\FooterWidgetNV;
use frontend\widgets\topMenuWidgetNV;
use frontend\widgets\StatusWidget;
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ресурсный центр для дизайнеров</title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Main layout -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web');?>/css/profile.css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet'>
</head>
<body>

  
  <section id="menu">
       <?= topMenuWidgetNV::widget()?>
  </section>
  <section id="status">
      <?= StatusWidget::widget(
        [
		'avatar' => $model->avatar,
		'name' => $model->name,
		'family_name' => $model->family_name,
		'city' => $model->city,
		'active' => 'profile',
        ]
              )?>
  </section>
  <section id="content">
      
<?php $form = ActiveForm::begin([
    'method' => 'post',
    'class' => 'form-default-class',
]); ?>
  <div class="block" style="width: 50%">
    <input type="text" spellcheck="false" name="field1" value="<?= $model->name; ?>" required="true" />
    <input type="text" spellcheck="false" name="field2" value="<?= $model->father_name; ?>" required="true" />
    <input type="text" spellcheck="false" name="field3" value="<?= $model->family_name; ?>" required="true" />
    <input type="text" spellcheck="false" name="field4" value="<?= $model->website; ?>" required="false" />
    <input type="text" spellcheck="false" name="field5" value="<?= $model->city; ?>" required="false" />
    <label for="a">
      <span>О себе</span>
      <textarea name="" id="a" cols="30" rows="10"><?= $model->about; ?></textarea>
    </label>
  </div>
  <div class="block flex-vertical-sparnd">
    <div class="image-placeholder grey">
      <img src="<?= Yii::getAlias('@web');?>/img/status/<?= $model->avatar; ?>" alt="" class="image-placeholder__img" id="output">
      <div class="image-placeholder__edit-button">
      <span class="glyphicon glyphicon-pencil"></span>
      </div>
    </div>
    <input type="file" name="avatar" id="imgInput" accept="image/*" onchange="loadFile(event)">
     
      <?= Html::hiddenInput('', $form->field($model, 'file')->fileInput()) ?>
<!--    <label class="image-placeholder__edit-button">
           q
            <input type="file" name="" id="">
            <span class="glyphicon glyphicon-pencil"></span>
    </label>-->
    <span>&nbsp;</span>
    <?= Html::submitButton('Сохранить', ['class' => 'button__red']) ?>
  </div>
<?php ActiveForm::end(); ?>
    
  </section>
    <section id="footer">  
      <?= FooterWidgetNV::widget() ?>
    </section>
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  
  <!--Жизни не мыслю без шаблонизаторов-->
  <script src="js/vue.min.js"></script>
  <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  </script>  
</body>
</html>