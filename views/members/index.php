<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */
?>
<div class="main-reg">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'text') ?>

    <div class="form-group">
    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

    <?php
    if ($model->scenario === 'emailActivation'):
        ?>
        <i>*На указанный емайл будет отправлено письмо для активации аккаунта.</i>
        <?php
    endif;
    ?>

</div><!-- main-reg -->
