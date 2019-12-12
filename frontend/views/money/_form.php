<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Money */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="money-form">
    
    <?php $form = ActiveForm::begin(); ?>
    Денег на счету: <?= $model->total ?> 
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>
    <? $model->timers =  date('Y-d-m h:i:s'); ?>
    <?= $form->field($model, 'timers')->hiddenInput()->label(false) ;
   
    ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?= $usernameL = Yii::$app->user->identity->username ; ?>
</div>
