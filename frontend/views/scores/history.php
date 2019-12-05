<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Деньги';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="box box-primary color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title">Информация о блоке</h3>
        </div>
        <div class="box-body">
            <div class="row">

                <div class="col-md-6">
                    <?= 'История 1<br>'?>
                </div>

                <div id="typeBlock" class="col-md-3">
                    <?= 'История 2<br>'?>
                </div>

                <div class="col-md-3">
                    <?= 'История 3<br>'?>
                </div>

                <div id = "contentBlock" >

                    <div id = "contentBlock-wysiwyg" name="content"  class="col-md-12">
                        <?= 'История 1<br>'?>
                    </div>

                    <div id = "contentBlock-textarea" name="content"   class="col-md-12">
                        <?= 'История 1<br>'?>
                    </div>

                    <div id = "contentBlock-text" name="content"  class="col-md-12">
                        <?= 'История 1<br>'?>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>