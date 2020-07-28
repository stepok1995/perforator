<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tvocansion */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tvocansion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(TinyMce::className(), [
        'options' => ['rows' => 20],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($model, 'money')->textInput() ?>

    <?php
        echo DatePicker::widget([
            'name' => 'date',
            'value' => date('d-M-Y'),
            'options' => ['placeholder' => 'Выберите дату'],
            'language' => 'ru',
            'pluginOptions' => [
            'format' => 'dd-M-yyyy',
            'todayHighlight' => true
            ]
            ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
