<?php

namespace common\services\auth;

use common\models\Money;
use Yii;
use common\models\User;
use frontend\models\SignupForm;
use yii\behaviors\TimestampBehavior;

class SignupService
{

    public function signup(SignupForm $form)
    {
        $user = new User();
        $user->username = $form->username;
        $user->generateAuthKey();
        $user->setPassword($form->password);
        $user->email = $form->email;
        $user->email_confirm_token = Yii::$app->security->generateRandomString();
        $user->status = User::STATUS_WAIT;
        $name = $form->username;
        if(!$user->save()){
            throw new \RuntimeException('Saving error.');
        }

        $money = new Money();
        $money->username = $name;
        $money->currency = 'usd';
        $money->total = '0';
        $money->timers = date("Y-m-d H:i:s");
        $money->save();

        $money = new Money();
        $money->username = $name;
        $money->currency = 'rub';
        $money->total = '0';
        $money->timers = date("Y-m-d H:i:s");
        $money->save();

        return $user;
    }



    public function sentEmailConfirm(User $user)
    {
        $email = $user->email;

        $sent = Yii::$app->mailer
            ->compose(
                ['html' => 'user-signup-comfirm-html', 'text' => 'user-signup-comfirm-text'],
                ['user' => $user])
            ->setTo($email)
            ->setFrom('weren9000@yandex.ru')
            ->setSubject('Confirmation of registration')
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Sending error.');
        }
    }


    public function confirmation($token): void
    {
        if (empty($token)) {
            throw new \DomainException('Empty confirm token.');
        }

        $user = User::findOne(['email_confirm_token' => $token]);
        if (!$user) {
            throw new \DomainException('User is not found.');
        }

        $user->email_confirm_token = null;
        $user->status = User::STATUS_ACTIVE;
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }

        if (!Yii::$app->getUser()->login($user)){
            throw new \RuntimeException('Error authentication.');
        }
    }

}