<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */
/* @var $form ActiveForm */


?>
<div class="new-booking">

    <?php 
    Pjax::begin();
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerID')->textInput() ?>
    
    <?php if($model->multipleCards){ echo $form->field($model, 'cardtype')->textInput();  } ?>
   
  
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); 
    Pjax::end(); ?>

</div><!-- new-booking -->