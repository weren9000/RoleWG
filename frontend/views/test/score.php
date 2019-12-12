<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Tabs;

$this->title = 'Счета';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-score">
<!--    <center><h1>--><?//= Html::encode($this->title) ?><!--</h1></center>-->

<!--    <p>-->
<!--        Валюта, Склад-->
<!--    </p>-->

    <?php
    echo Tabs::widget([
        'items' => [
            [
                'label' => 'Валюта',
                'content' => $this->render('money'),

                'active' => true // указывает на активность вкладки
            ],
            [
                'label' => 'История сделок',
                'content' => $this->render('history'),
            ],
//            [
//                'label' => 'Заголовок вкладки 3',
//                'content' => 'Вкладка 3',
//                'headerOptions' => [
//                    'id' => 'someId'
//                ]
//            ],
//            [
//                'label' => 'Таб с указанием URL',
//                'url' => 'http://www.somesite.com',
//            ],
//            [
//                'label' => 'Dropdown',
//                'items' => [
//                    [
//                        'label' => '1',
//                        'content' => 'Выпадашка 1'
//                    ],
//                    [
//                        'label' => '2',
//                        'content' => 'Выпадашка 2'
//                    ],
//                    [
//                        'label' => '3',
//                        'content' => 'Выпадашка 3'
//                    ],
//                ]
//            ]
        ]
    ]);
    ?>

</div>
