<?php

/* 
/* @var $arrMember frontend\models\Service */
use yii\widgets\ActiveForm;
?>


        <div class="checkboxes__header">Найти услугу<span class="glyphicon glyphicon-search" style="margin-left: 5px; color: #999"></span></div>
     <?php $form = ActiveForm::begin(['method' => 'post', 'id' => "myForm"]); ?>
        <div class="checkboxes__list">
          <div class="checkboxes__list__choose_all" onclick="allChecked()">Выбрать все!</div>
          <?php            
          foreach ($services as $serviceLat => $serviceRus){
              echo '<label class="container">' . $serviceRus . '
                    <input class="ajaxy" type="checkbox" name="' . $serviceRus . '">
                    <span class="checkmark"></span>
                    </label>';
          }?>    
        </div>
    <?php ActiveForm::end(); ?>
    
    <script>

    
    var elements = document.getElementsByClassName('checkboxes__header');
      for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', submitter); // "тест", "пройден"
      }
    function submitter() {
    console.log("submission");
    document.getElementById("myForm").submit();
    }
    
    
        var checked = false;
    function allChecked(){
      var elements = document.querySelectorAll("input");
      for(var i=0; i<elements.length; i++){
        if(!checked){
          elements[i].checked = true;
        }
        else{
          elements[i].checked = false;
        }
      }
      if(elements[0].checked == true){
        checked = true;
        document.querySelectorAll(".checkboxes__list__choose_all")[0].innerHTML = "Сбросить все";
      }
      else {
        checked = false;
        document.querySelectorAll(".checkboxes__list__choose_all")[0].innerHTML = "Выбрать все";
      }
    }
  window.onload = function(){if (
              (document.querySelectorAll(".result")[0].firstChild.nextSibling === null) ||
              (document.querySelectorAll(".result")[0].firstChild.nextSibling.className !== "coupon-card"))
      {document.querySelectorAll(".result")[0].innerHTML = '<div class="no-result">Поиск не дал результатов</div>';};};
    </script>