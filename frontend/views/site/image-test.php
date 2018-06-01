<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use dosamigos\fileupload\FileUpload;

$this->title = 'Upload images';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the <?= Html::encode($this->title) ?> page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
    
    <?= FileUpload::widget([
    'model' => $model,
    'attribute' => 'picture',
    'url' => ['site/upload-picture'], // action
    'options' => ['accept' => 'image/*'],
    'clientOptions' => [
        'maxFileSize' => 2000000
    ],
    // Also, you can specify jQuery-File-Upload events
    // see: https://github.com/blueimp/jQuery-File-Upload/wiki/Options#processing-callback-options
    'clientEvents' => [
        'fileuploaddone' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                                console.log("done");
                                
                            }',
        'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
    ],
]); ?>
    <img src="" alt="" class="image-placeholder__img" id="output">
    <span class="btn btn-info fileinput-button" id="bubu">
    <i class="glyphicon glyphicon-globe"></i>
    <span>Крякря</span>
</div>

<?php if($model->picture): ?>
 <img src="/uploads/<?= $model->picture?>" alt="">
<?php endif; ?>

<script>
  var loadFile = function(event) {
      console.log("worked");
    var output = document.getElementById('output');
    //if (output.src===document.URL)
        output.src = URL.createObjectURL(event.target.files[0]); 
    //console.log("I worked");
    //output.src = URL.createObjectURL(event.target.files[0]);
  };
  var clickFile = function(event) {
    var output = document.getElementById('output');
    console.log(output.src===document.URL);
    console.log("You clicked");
  };
  var el = document.getElementById("imageform-picture");
  el.addEventListener("change", loadFile, false);
  bubu.addEventListener("click", clickFile, true);
  </script>  