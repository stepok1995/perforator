<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Timage */

$this->title = 'Загрузка картинок';
$this->params['breadcrumbs'][] = ['label' => 'Картинки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
