<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tvocansion */

$this->title = 'Создайте вакансию';
$this->params['breadcrumbs'][] = ['label' => 'Вакансии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tvocansion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
