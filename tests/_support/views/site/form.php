<?php

use yii\helpers\Html;
use odilov\multilingual\widgets\ActiveForm;

/* @var $this yii\web\View */
?>

<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['id' => 'multilang']) ?>

<?= $form->languageSwitcher($model, '@module/src/views/form-switcher/pills'); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'content')->textarea() ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
