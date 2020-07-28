<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TskillsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги и цены';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tskills-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить услуги и цены', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'average_cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
