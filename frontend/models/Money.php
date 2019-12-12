<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "money".
 *
 * @property int $id
 * @property string $username
 * @property string $currency
 * @property int|null $total
 * @property string|null $timers
 */
class Money extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'money';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'currency'], 'required'],
            [['total'], 'integer'],
            [['timers'], 'safe'],
            [['username', 'currency'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'currency' => 'Currency',
            'total' => 'Total',
            'timers' => 'Timers',
        ];
    }
}
