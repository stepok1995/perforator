<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tskills */

$this->title = 'Внести изменения в услуги и цены: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Услуги и цены', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="tskills-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
