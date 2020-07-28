<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuser */

$this->title = 'Создать личную страницу';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
