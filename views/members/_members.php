<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<div class="read">
    <h2><?= Html::encode($model->name) ?></h2>
    <div class="post">
        <span><?= HtmlPurifier::process($model->email) ?></span>
        <span> <?= HtmlPurifier::process($model->text) ?></span>
        <br>
        <span> <?= HtmlPurifier::process($model->time) ?></span>
    </div>
</div>

