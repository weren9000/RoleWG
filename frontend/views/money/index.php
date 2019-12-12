<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MoneySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Moneys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="money-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Money', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php

?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,

        'columns' => [
        //     // ['class' => 'yii\grid\SerialColumn'],

        //     'id',
            [
                'attribute' => 'id',
                'format' => 'raw',
                'filter' => false,
                'label' => '№',
                'value' => function($model) {
                    $action = 'edit';
                    return '<a href="/frontend/web/money/update?id=' .$model->id . '">' . $model->id . '</a>';
                }
            ],
            'username',
            'currency',
            'total',
            // 'timers',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    

</div>
