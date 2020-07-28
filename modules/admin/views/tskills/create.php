<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tskills */

$this->title = 'Добавить услуги и цены';
$this->params['breadcrumbs'][] = ['label' => 'Услуги и цены', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tskills-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
