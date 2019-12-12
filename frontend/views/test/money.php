<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;


$this->title = 'Деньги';
//$this->params['breadcrumbs'][] = $this->title;

$usd = (new \yii\db\Query())
    ->select(['id','total', 'username'])
    ->from('money')
    ->where(['currency' => 'usd', 'username' => Yii::$app->user->identity->username])
    ->all();

$rub = (new \yii\db\Query())
    ->select(['id','total', 'username'])
    ->from('money')
    ->where(['currency' => 'rub', 'username' => Yii::$app->user->identity->username])
    ->all();
?>

<div class="site-history">
    <div class="col-md-12">

      # <a href="<?= '/scores/view?id='.$usd[0]['id'] ; ?>"><?= $usd[0]['id']?></a>
       Доллары: <?= $usd[0]['total']; ?>

    </div>
    <div class="col-md-12">


        Рубли: <?= $rub[0]['total']; ?>
    </div>
</div>
