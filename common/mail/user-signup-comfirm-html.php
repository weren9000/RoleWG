<?php
use yii\helpers\Html;

/* @var $user \common\models\User */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/signup-confirm', 'token' => $user->email_confirm_token]);
?>
<div class="password-reset">
    <p>Поздравляю, <?= Html::encode($user->username) ?>!</p>

    <p>Перейдите по ссылке ниже, чтобы подтвердить свой адрес электронной почты:</p>

    <p><?= Html::a(Html::encode($confirmLink), $confirmLink) ?></p>
</div>